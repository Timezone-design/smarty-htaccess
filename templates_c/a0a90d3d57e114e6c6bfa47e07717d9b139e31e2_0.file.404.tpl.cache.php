<?php
/* Smarty version 3.1.39, created on 2021-05-22 14:43:36
  from 'C:\xampp\htdocs\test\templates\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a8fc78e81f40_83221503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0a90d3d57e114e6c6bfa47e07717d9b139e31e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\404.tpl',
      1 => 1621653364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a8fc78e81f40_83221503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '133854364360a8fc78bd5717_97014886';
?>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174260840560a8fc78e7f3d9_33491002', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content"} */
class Block_174260840560a8fc78e7f3d9_33491002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_174260840560a8fc78e7f3d9_33491002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Page Not Found.</p>
    <?php
}
}
/* {/block "content"} */
}
