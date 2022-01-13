<?php
/* Smarty version 3.1.40, created on 2021-12-11 17:27:49
  from 'C:\laragon\www\tps\TP4\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b4df95b9f7f9_79023125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '234468e3145562f1277a01b1833fcfe02392f1b1' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\index.tpl',
      1 => 1639243667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b4df95b9f7f9_79023125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73053361961b4df95b80332_44003296', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110138857861b4df95b85020_89860757', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_73053361961b4df95b80332_44003296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_73053361961b4df95b80332_44003296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_110138857861b4df95b85020_89860757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_110138857861b4df95b85020_89860757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<div class="container">
<h1><b>Accueil</b></h1>

<?php if ((isset($_SESSION['name']))) {?>
    <div>Bonjour <?php echo $_SESSION['name'];?>
.</div>
    <div>
    <div><a href='profil'>mon profil</a> . <a href='logout'>Se déconnecter</a></div>
<?php } else { ?>
    Bienvenue sur mon site ! Vous pouvez vous inscrire ou vous connecter.
    <br>
    <div><a href='login'>Se connecter</a> ou <a href='register'>S'inscrire</a></div>
<?php }?>

</div>
</div>
<?php
}
}
/* {/block 'body'} */
}
