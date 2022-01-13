{extends file='layout.tpl'}
{block name=title}Login{/block}
{block name=body}
<div id='main'>
<h1>Login</h1>
<p>
<div class="container">
    <form action="login" method="post">
        <br>
        <div class="pure-control-group">
            <label for="aligned-email"><b>Saisissez votre E-mail :</b></label>
            <input name="email" type="email" value="{$valeurs.email|escape|default:''}" placeholder="jean@lyon.fr" />
            {$msg['email']|default:''}
        </div>
        <br>
        <div class="pure-control-group">
            <label for="aligned-psw"><b>Saisissez votre mot de passe :</b></label>
            <input name="psw" type="password" value="{$valeurs.psw|escape|default:''}" placeholder="Minimum 8 caractères" />
            {$msg['psw']|default:''}
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>
</p>
</div>
{/block}