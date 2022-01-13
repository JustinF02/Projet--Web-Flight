<?php
    session_start();
    require '../../includes/flight-master/flight/Flight.php';
    require '../../includes/smarty-3.1.40/libs/Smarty.class.php';

    require '../../includes/pdo.php';
    // session_start()
    require 'routes/routes.php';
    $smarty = new Smarty;
    
    function rewriteurl($str)
    {  
    $transliterator = Transliterator::createFromRules(':: NFD; :: [:Nonspacing Mark:] Remove; ::NFC;', Transliterator::FORWARD);
    $normalized = $transliterator->transliterate($str);
    return preg_replace("/[^a-zA-Z0-9\.]/","_",$normalized);
    }

    // Register Smarty as the view class
    // Also pass a callback function to configure Smarty on load
    Flight::register('view', 'Smarty', array(), function($smarty){
        $smarty->template_dir = './templates/';
        $smarty->compile_dir = './templates_c/';
        $smarty->config_dir = './config/';
        $smarty->cache_dir = './cache/';
        //plugin rewriteurl déclarée précédemment
        $smarty->registerPlugin("modifier","rewriteurl", "rewriteurl");

    });

    Flight::map('render', function($template, $data){
        Flight::view()->assign($data);
        Flight::view()->display($template);
    });

    Flight::map('debug', function($data){
    Flight::view()->assign(array("debug"=>print_r($data,true)));
    Flight::view()->display("debug.tpl");
    });


    // Flight::map('notFound', function(){
    //     // Display custom 404 page
    //    echo "<p>la route spécifiée n'existe pas</p>";
    // });

    Flight::route('*', function($infos){
    echo "<p>route * </p>";
    echo "<pre>";
    print_r($infos);
    echo "</pre>";
    },true);

    //supprime les éventuels @ de la requête pour éviter le bug des paramètres nommés
    Flight::request()->url= str_replace('%40','',Flight::request()->url);

    Flight::start();
?>