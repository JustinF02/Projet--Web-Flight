<html>
<head>
    <title>{block name=title}Default Page Title{/block}</title>
    {block name=head}
    <link rel="stylesheet" href="templates/style.css">
    {/block}
</head>
<body>
{block name=menu}
<div class = "container">
    
    <p><b>Menu de navigation : </b></p>
    <a href='./'>Accueil</a>
    <a href='register'>inscription</a> 
    <a href='login'>connexion</a>

    <!-- Afficher le lien du profil si la session existe-->
    {if isset($smarty.session.name)}
        <a href='profil'>profil</a> 
    {/if}
    <hr>
</div>
{/block}
{block name=body}{/block}
</body>
</html>
