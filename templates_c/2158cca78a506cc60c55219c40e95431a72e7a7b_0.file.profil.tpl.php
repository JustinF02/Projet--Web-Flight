<?php
/* Smarty version 3.1.40, created on 2021-12-11 10:39:59
  from 'C:\laragon\www\tps\TP4\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b47fff36df66_62725212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2158cca78a506cc60c55219c40e95431a72e7a7b' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\profil.tpl',
      1 => 1639219193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b47fff36df66_62725212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99062775061b47fff367256_55328855', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157683060061b47fff367bd8_01930239', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_99062775061b47fff367256_55328855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_99062775061b47fff367256_55328855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_157683060061b47fff367bd8_01930239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_157683060061b47fff367bd8_01930239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Mon profil</h1>
<div class="container">

<div>Nom : Justin</div>
<div>Ville : Amiens</div>
<div>Pays : France</div>
<div>Email : justin@amiens.fr</div>
<!--
    <?php if (((isset($_SESSION['name'])))) {?>
    <div>Nom : <?php echo $_SESSION['name'];?>
</div>
    <?php }?>
    <br>
    <?php if (((isset($_SESSION['city'])))) {?>
        <div>Ville : <?php echo $_SESSION['city'];?>
</div>
    <?php }?>
    <br>
    <?php if (((isset($_SESSION['country'])))) {?>
        <div>Pays : <?php echo $_SESSION['country'];?>
</div>
    <?php }?>
-->
</div>
<?php
}
}
/* {/block 'body'} */
}
