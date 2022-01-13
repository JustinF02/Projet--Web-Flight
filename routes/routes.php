<?php

    //Route pour l'accueil
    Flight::route('/', function(){
        Flight::render("index.tpl",array());
    });
    //Route pour le formulaire d'inscription
    Flight::route('GET /register', function(){
        Flight::render("register.tpl",array());
    });
    //Route qui récupère les résultats du formulaire register
    Flight::route('POST /register', function(){
        //Récupération de la bdd
        $db = Flight::get('pdo');
        //Récupération des données des champs du formulaire
        $data = Flight::request()->data;
        //Déclaration du tableau associatif d'erreur
        $msg = array();

        //erreur est un booléen qui joue le "drapeau" -> il se lève s'il y a au moins 1 erreur.
        //Il est levé avec true en cas d'erreur
        $erreur = false;
        //On vérifie que le nom soit saisi
        if (empty(trim($data->name))){
            $msg['name'] = "nom obligatoire";
            $erreur = true;
        } 
        //On vérifie que l'email est saisie
        if (empty(trim($data->email))) {
            $msg['email'] = "Email obligatoire";
            $erreur = true;
        }else{
            //L'email est saisie alors :
            
            //Test pour valider le format de l'email
            if (!filter_var($data->email, FILTER_VALIDATE_EMAIL))
            {
                $msg['email'] = 'Email non correcte';
                $erreur = true;
            }
            else 
            {
                //Test pour vérifier que le mail n'est pas dans la base
                $testEmail=$db->prepare('SELECT Email FROM utilisateurs WHERE Email= ?');
                $testEmail->execute([$data->email]);
                $verifUser = $testEmail->fetch();
                if ($verifUser){
                    $msg['email'] = 'Email déjà utilisé';
                    $erreur = true;
                }                    
            }
        }
        //On vérifie si le mot de passe est inférieur à 8
        if (strlen($data->psw) < 8) {
            $erreur = true;
            $msg['psw'] = "Mot de passe trop court";
        }
        //On vérifie s'il est vide après qu'il soit inférieur pour que $msg prenne en valeur "mot de passe obligatoire si strlen renvoie 0.
        if (empty(trim($data->psw))){
            $msg['psw'] = "Mot de passe obligatoire";
            $erreur = true;
        }
        //On vérifie si les deux mots de passe correspondent
        if ($data->psw != $data->rpsw){
            $erreur = true;
            $msg['rpsw'] = "Saisissez le même mot de passe";
        } 
        //On vérifie que le pays est renseigné
        if (empty(trim($data->country))){
            $msg['country'] = "Renseignez le pays";
            $erreur = true;
        } 
        //On vérifie que la ville est renseignée
        if (empty(trim($data->city))){
            $erreur = true;
            $msg['city'] = "Renseignez la ville";
        }
        
        //On test si le drapeau erreur est levé.
        if ($erreur == true) {
            //S'il est levé, on renvoie les erreurs
            Flight::render("register.tpl",array("msg" => $msg, 'valeurs' => $_POST));
        } else {            
            //S'il n'y a pas d'erreur, alors on peut insérer le tout dans la base de données
            $requete = $db -> prepare("INSERT INTO `utilisateurs` (`Nom`, `Pays`, `Ville`, `Email`, `Motdepasse`) VALUES (:Nom,:Pays,:Ville,:Email,:Motdepasse)");
            $requete->execute(array(
                ':Nom' => $_POST['name'],
                ':Pays' => $_POST['country'],
                ':Ville' => $_POST['city'],
                ':Email' => $_POST['email'],
                ':Motdepasse' => password_hash($_POST['psw'], PASSWORD_DEFAULT)
            ));
            //Une fois insérées, on renvoie l'utilisateur sur la page d'inscription
            Flight::render("success.tpl",array());
        }
    });

    //Route pour le formulaire Login
    Flight::route('GET /login', function(){
        Flight::render("login.tpl",array());
    });
    //Route pour le formulaire profil
    Flight::route('GET /profil', function(){
        if(empty($_SESSION)){
            //Si la session est vide, envoyer au formulaire de connexion
            Flight::render("login.tpl", array());
        }
        else{
            //Sinon envoyer sur le template profil
            Flight::render("profil.tpl",array());
        }
    
    });
    //Route pour se déconnecter, renvoie vers l'accueil
    Flight::route('GET /logout', function(){
        //Fonction qui vide la session :
        session_unset();
        //Fonction qui détruit la session :
        session_destroy();
        Flight::render("index.tpl",array());
    });

    //Route qui récupère les données du formulaire de connexion
    Flight::route('POST /login', function(){
        //Les commentaires pour ces lignes de codes se trouvent dans le POST /register
        $db = Flight::get('pdo');
        $data = Flight::request() -> data;
        $msgLogin = array();
        $TestErreur = false;
    
        //On considère qu'il n'est pas utile de vérifier si le mot de passe est inférieur à 8 caractères étant donné que cela est déjà fait lors de l'inscription
        //De plus, si l'utilisateur possède tout de même un mot de passe plus court, il ne pourrait pas se connecter.
        if(empty(trim($data->email))){
            $msgLogin['email'] = "Veuillez entrer votre adresse e-mail.";
            $TestErreur = true;
            $nonVide = true;
        }else{
            if(!filter_var($data->email, FILTER_VALIDATE_EMAIL)){
                $msgLogin['email'] = "L'addresse saisie est invalide.";
                $TestErreur = true;
            }
        }
        if(empty(trim($data->psw))){
            $msgLogin['psw'] = "Veuillez entrer votre mot de passe.";
            $TestErreur = true;
        }

        //Test si l'email existe dans la base de donnée
        if($TestErreur == false){
            $email = $data->email;
            $requete = $db->prepare("SELECT * FROM utilisateurs WHERE Email = ?");
            $requete->execute(array($email));
            $verifUser = $requete->fetch();
            if($verifUser){
                //L'adresse email est enregistrée dans la bdd, on va récupérer le mot de passe :
                $mdp = $db->prepare("SELECT Motdepasse FROM utilisateur WHERE Email = ?");
                $mdp->execute(array($data->email));
                $passwd = $mdp->fetch();

                
                //La fonction password_verify compare les 2 mots de passe et indique s'ils sont identiques
                if(!password_verify($data->psw, $passwd[0])){
                    //Si le mot de passe saisi par l'utilisateur ne correspond pas à celui dans la bdd, alors il est incorrect
                    $msgLogin['psw'] = "Mot de passe incorrect";
                    $TestErreur = true;
                }
            }else{
                //Si l'adresse n'est pas retrouvée dans la bdd
                $msgLogin['email'] = "Cette addresse n'est reliée à aucun compte";
                $TestErreur = true;
            }
        }
            

        if($TestErreur == true){    
            //Une erreur au moins existe, la structure d'erreur msg est envoyée vers le template Login.tpl
            Flight::render("login.tpl",array("msg" => $msgLogin, 'valeurs' => $_POST));
        }else{
            //S'il n'y a pas d'erreur
            
            //On va récuperer toutes les données de l'utilisateur contenues dans la bdd
            $nameUser = $db->prepare("SELECT * FROM utilisateurs WHERE Email = ?");   
            $nameUser->execute(array($data->email));
            $resultat = $nameUser->fetchAll();
            //La structure _SESSION va récuperer les valeurs du nom et de l'email
            foreach($resultat as $indiceTab){
                $_SESSION['name'] = $indiceTab[0];
                $_SESSION['country'] = $indiceTab[1];
                $_SESSION['city'] = $indiceTab[2];
                $_SESSION['email'] = $indiceTab[3];
            }
            Flight::render("index.tpl", array());
        }
    });
    //Route pour la page de succès
    Flight::route('Get /success', function(){
            Flight::render("succes.tpl", array());
    });
?>