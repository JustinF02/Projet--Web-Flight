<?php
/* Smarty version 3.1.40, created on 2021-12-11 17:27:51
  from 'C:\laragon\www\tps\TP4\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b4df974c5566_80621895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb2566e4338f3059340d7d60054eeba98fe17e86' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\login.tpl',
      1 => 1639243623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b4df974c5566_80621895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134111993361b4df9749d060_90414663', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193332906261b4df9749f8e1_14222076', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_134111993361b4df9749d060_90414663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_134111993361b4df9749d060_90414663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_193332906261b4df9749f8e1_14222076 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_193332906261b4df9749f8e1_14222076',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Login</h1>
<p>
<div class="container">
    <form action="login" method="post">
        <br>
        <div class="pure-control-group">
            <label for="aligned-email"><b>Saisissez votre E-mail :</b></label>
            <input name="email" type="email" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="jean@lyon.fr" />
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['msg']->value['email'])===null||$tmp==='' ? '' : $tmp);?>

        </div>
        <br>
        <div class="pure-control-group">
            <label for="aligned-psw"><b>Saisissez votre mot de passe :</b></label>
            <input name="psw" type="password" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['psw'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Minimum 8 caractères" />
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['msg']->value['psw'])===null||$tmp==='' ? '' : $tmp);?>

        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>
</p>
</div>
<?php
}
}
/* {/block 'body'} */
}
