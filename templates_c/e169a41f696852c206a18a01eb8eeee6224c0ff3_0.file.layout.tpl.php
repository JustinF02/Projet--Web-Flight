<?php
/* Smarty version 3.1.40, created on 2021-12-11 17:27:28
  from 'C:\laragon\www\tps\TP4\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61b4df8087ac16_73785594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e169a41f696852c206a18a01eb8eeee6224c0ff3' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\layout.tpl',
      1 => 1639243537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b4df8087ac16_73785594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103740508661b4df80875277_41476635', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36739863161b4df808766c8_32279671', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19874574161b4df80877663_36722182', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29821537561b4df80879fd9_70695299', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_103740508661b4df80875277_41476635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_103740508661b4df80875277_41476635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_36739863161b4df808766c8_32279671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_36739863161b4df808766c8_32279671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="templates/style.css">
    <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_19874574161b4df80877663_36722182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_19874574161b4df80877663_36722182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class = "container">

    <p><b>Menu de navigation : </b></p>
    <a href='./'>Accueil</a>
    <a href='register'>inscription</a> 
    <a href='login'>connexion</a>

    <?php if ((isset($_SESSION['name']))) {?>
        <a href='profil'>profil</a> 
    <?php }?>
    <hr>
</div>
<?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_29821537561b4df80879fd9_70695299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_29821537561b4df80879fd9_70695299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
