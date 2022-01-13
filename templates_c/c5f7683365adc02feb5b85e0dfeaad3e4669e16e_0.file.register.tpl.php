<?php
/* Smarty version 3.1.40, created on 2021-12-11 17:27:32
  from 'C:\laragon\www\tps\TP4\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b4df844c31d5_05626392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5f7683365adc02feb5b85e0dfeaad3e4669e16e' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\register.tpl',
      1 => 1639243572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b4df844c31d5_05626392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39989235461b4df84479bd5_49329507', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170682966561b4df8447b850_16096244', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_39989235461b4df84479bd5_49329507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_39989235461b4df84479bd5_49329507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_170682966561b4df8447b850_16096244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_170682966561b4df8447b850_16096244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="register" method="post">
    <div class="container">
        <h1><b>S'enregistrer</b></h1>

        <div class="pure-control-group">
            <label for="aligned-name"><b>Votre nom :</b></label>
            <input name="name" type="name" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['name'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Jean" />
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['msg']->value['name'])===null||$tmp==='' ? '' : $tmp);?>

        </div>
        

        <div class="pure-control-group">
            <label for="aligned-city"><b>Votre ville :</b></label>
            <input name="city" type="city" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['city'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Lyon" />
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['msg']->value['city'])===null||$tmp==='' ? '' : $tmp);?>

        </div>

        <div class="pure-control-group">
            <label for="aligned-country"><b>Votre pays :</b></label>
            <input name="country" type="country" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['country'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="France" />
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['msg']->value['country'])===null||$tmp==='' ? '' : $tmp);?>

        </div>

        <div class="pure-control-group">
            <label for="aligned-email"><b>Votre E-mail :</b></label>
            <input name="email" type="email" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="jean@lyon.fr" />
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['msg']->value['email'])===null||$tmp==='' ? '' : $tmp);?>

        </div>

        <div class="pure-control-group">
            <label for="aligned-psw"><b>Saisissez votre mot de passe :</b></label>
            <input name="psw" type="password" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['psw'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Minimum 8 caractères" />
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['msg']->value['psw'])===null||$tmp==='' ? '' : $tmp);?>

        </div>

        <div class="pure-control-group">
            <label for="aligned-rpsw"><b>Confirmez le mot de passe</b></label>
            <input name="rpsw" type="password" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['valeurs']->value['rpsw'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Saisir le même mot de passe" />
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['msg']->value['rpsw'])===null||$tmp==='' ? '' : $tmp);?>

        </div>

        <button type="submit" class="registerbtn">S'enregistrer</button>
    </div>
    </form>



<?php
}
}
/* {/block 'body'} */
}
