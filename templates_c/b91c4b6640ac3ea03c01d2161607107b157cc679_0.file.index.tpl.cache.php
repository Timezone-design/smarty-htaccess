<?php
/* Smarty version 3.1.39, created on 2021-05-22 22:22:30
  from 'C:\xampp\htdocs\test\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a96806209515_56167295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b91c4b6640ac3ea03c01d2161607107b157cc679' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\index.tpl',
      1 => 1621713176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/product_search.tpl' => 1,
  ),
),false)) {
function content_60a96806209515_56167295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '73615172460a96805e0be55_07029675';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98798411260a9680619f632_28862092', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content_menu"} */
class Block_190507816360a968061a1ad4_07845512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block "content_menu"} */
/* {block "product_search"} */
class Block_14849892760a968061a5305_82256452 extends Smarty_Internal_Block
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
class Block_207837618360a96806206bc9_35143310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block "notice"} */
/* {block "content"} */
class Block_98798411260a9680619f632_28862092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_98798411260a9680619f632_28862092',
  ),
  'content_menu' => 
  array (
    0 => 'Block_190507816360a968061a1ad4_07845512',
  ),
  'product_search' => 
  array (
    0 => 'Block_14849892760a968061a5305_82256452',
  ),
  'notice' => 
  array (
    0 => 'Block_207837618360a96806206bc9_35143310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190507816360a968061a1ad4_07845512', "content_menu", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14849892760a968061a5305_82256452', "product_search", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207837618360a96806206bc9_35143310', "notice", $this->tplIndex);
?>


<?php
}
}
/* {/block "content"} */
}
