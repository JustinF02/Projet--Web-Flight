{extends file='layout.tpl'}
{block name=title}{/block}
{block name=body}
<div id='main'>
<div class="container">
<h1><b>Accueil</b></h1>
<!--Si la session existe, les liens suivants seront dévoilés :-->
{if isset($smarty.session.name)}
    <!-- Annonce du nom-->
    <div>Bonjour {$smarty.session.name}.</div>
    <div>
    <!-- Lien du profil et lien pour se déconnecter-->
    <div><a href='profil'>mon profil</a> . <a href='logout'>Se déconnecter</a></div>
{else}
    <!-- Page sans session -->
    Bienvenue sur mon site ! Vous pouvez vous inscrire ou vous connecter.
    <br>
    <div><a href='login'>Se connecter</a> ou <a href='register'>S'inscrire</a></div>
{/if}

</div>
</div>
{/block}