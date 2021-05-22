<?php
/* Smarty version 3.1.39, created on 2021-05-22 14:34:45
  from 'C:\xampp\htdocs\test\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a8fa65ececd0_23760636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b91c4b6640ac3ea03c01d2161607107b157cc679' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\index.tpl',
      1 => 1621675587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/product_search.tpl' => 1,
  ),
),false)) {
function content_60a8fa65ececd0_23760636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '139806289660a8fa65c8e538_92399124';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159855951560a8fa65e76921_49117708', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content_menu"} */
class Block_556170260a8fa65e79511_05933142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block "content_menu"} */
/* {block "product_search"} */
class Block_125635507160a8fa65ead409_59840537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  	<?php $_smarty_tpl->_subTemplateRender('file:_partials/product_search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block "product_search"} */
/* {block "notice"} */
class Block_20912222860a8fa65eccf16_57111069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block "notice"} */
/* {block "content"} */
class Block_159855951560a8fa65e76921_49117708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_159855951560a8fa65e76921_49117708',
  ),
  'content_menu' => 
  array (
    0 => 'Block_556170260a8fa65e79511_05933142',
  ),
  'product_search' => 
  array (
    0 => 'Block_125635507160a8fa65ead409_59840537',
  ),
  'notice' => 
  array (
    0 => 'Block_20912222860a8fa65eccf16_57111069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_556170260a8fa65e79511_05933142', "content_menu", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125635507160a8fa65ead409_59840537', "product_search", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20912222860a8fa65eccf16_57111069', "notice", $this->tplIndex);
?>


<?php
}
}
/* {/block "content"} */
}
