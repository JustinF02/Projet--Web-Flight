{extends file='layout.tpl'}
{block name=title}Profil{/block}
{block name=body}
<div id='main'>
<h1>Mon profil</h1>
<div class="container">
    <!-- Si la session existe, afficher les infos-->
    {if (isset($smarty.session.name))}
    <div>Nom : {$smarty.session.name}</div>
    {/if}
    <br>
    {if (isset($smarty.session.city))}
        <div>Ville : {$smarty.session.city}</div>
    {/if}
    <br>
    {if (isset($smarty.session.country))}
        <div>Pays : {$smarty.session.country}</div>
    {/if}
    <br>
    {if (isset($smarty.session.email))}
    <div>Nom : {$smarty.session.email}</div>
    {/if}

</div>
{/block}