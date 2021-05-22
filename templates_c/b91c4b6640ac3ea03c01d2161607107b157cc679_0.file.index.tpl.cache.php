<?php
/* Smarty version 3.1.39, created on 2021-05-22 14:43:35
  from 'C:\xampp\htdocs\test\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a8fc77d082e1_37934847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b91c4b6640ac3ea03c01d2161607107b157cc679' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\index.tpl',
      1 => 1621687411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a8fc77d082e1_37934847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '159297143760a8fc77ba1785_95321752';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185644018060a8fc77cfce48_09163937', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content_menu"} */
class Block_65234102360a8fc77cff759_61661357 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block "content_menu"} */
/* {block "product_search"} */
class Block_100872866860a8fc77d02754_75730659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  	
  <?php
}
}
/* {/block "product_search"} */
/* {block "notice"} */
class Block_3159076360a8fc77d05158_75863382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block "notice"} */
/* {block "content"} */
class Block_185644018060a8fc77cfce48_09163937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_185644018060a8fc77cfce48_09163937',
  ),
  'content_menu' => 
  array (
    0 => 'Block_65234102360a8fc77cff759_61661357',
  ),
  'product_search' => 
  array (
    0 => 'Block_100872866860a8fc77d02754_75730659',
  ),
  'notice' => 
  array (
    0 => 'Block_3159076360a8fc77d05158_75863382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65234102360a8fc77cff759_61661357', "content_menu", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100872866860a8fc77d02754_75730659', "product_search", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3159076360a8fc77d05158_75863382', "notice", $this->tplIndex);
?>


<?php
}
}
/* {/block "content"} */
}
