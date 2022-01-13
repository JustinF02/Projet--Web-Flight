{extends file='layout.tpl'}
{block name=title}Register{/block}
{block name=body}
    <form action="register" method="post">
    <div class="container">
        <h1><b>S'enregistrer</b></h1>

        <!-- Champ du nom-->
        <div class="pure-control-group">
            <label for="aligned-name"><b>Votre nom :</b></label>
            <input name="name" type="name" value="{$valeurs.name|escape|default:''}" placeholder="Jean" />
            <!-- Input pour entrer les données, structure valeurs pour enregistrer les données-->
            {$msg['name']|default:''}
            <!-- valeur par défaut de l'erreur-->
        </div>

        <div class="pure-control-group">
            <label for="aligned-city"><b>Votre ville :</b></label>
            <input name="city" type="city" value="{$valeurs.city|escape|default:''}" placeholder="Lyon" />
            {$msg['city']|default:''}
        </div>

        <div class="pure-control-group">
            <label for="aligned-country"><b>Votre pays :</b></label>
            <input name="country" type="country" value="{$valeurs.country|escape|default:''}" placeholder="France" />
            {$msg['country']|default:''}
        </div>

        <div class="pure-control-group">
            <label for="aligned-email"><b>Votre E-mail :</b></label>
            <input name="email" type="email" value="{$valeurs.email|escape|default:''}" placeholder="jean@lyon.fr" />
            {$msg['email']|default:''}
        </div>

        <div class="pure-control-group">
            <label for="aligned-psw"><b>Saisissez votre mot de passe :</b></label>
            <input name="psw" type="password" value="{$valeurs.psw|escape|default:''}" placeholder="Minimum 8 caractères" />
            {$msg['psw']|default:''}
        </div>

        <div class="pure-control-group">
            <label for="aligned-rpsw"><b>Confirmez le mot de passe</b></label>
            <input name="rpsw" type="password" value="{$valeurs.rpsw|escape|default:''}" placeholder="Saisir le même mot de passe" />
            {$msg['rpsw']|default:''}
        </div>

        <button type="submit" class="registerbtn">S'enregistrer</button>
    </div>
    </form>



{/block}
