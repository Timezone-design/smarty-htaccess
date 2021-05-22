<?php
/* Smarty version 3.1.39, created on 2021-05-22 14:34:46
  from 'C:\xampp\htdocs\test\templates\_partials\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a8fa6617ff38_13082637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a49786ade115612b7829a286b1e6186701c4f77d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\_partials\\head.tpl',
      1 => 1621653379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_60a8fa6617ff38_13082637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '125685212560a8fa66133967_50840754';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64038266060a8fa6615ac42_04805963', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81035908360a8fa6615d049_88196319', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91871103160a8fa6615f069_12126316', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31934934660a8fa66166f98_26193212', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157418780360a8fa66169567_00969460', 'head_icons');
?>


<?php if ((isset($_smarty_tpl->tpl_vars['stylesheets']->value))) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19706626860a8fa6616e3a9_24276640', 'stylesheets');
?>

<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['javascript']->value))) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132171431560a8fa66178363_81882003', 'javascript_head');
?>

<?php }
}
/* {block 'head_charset'} */
class Block_64038266060a8fa6615ac42_04805963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_64038266060a8fa6615ac42_04805963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_81035908360a8fa6615d049_88196319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_81035908360a8fa6615d049_88196319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo'} */
class Block_91871103160a8fa6615f069_12126316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_91871103160a8fa6615f069_12126316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php echo $_smarty_tpl->tpl_vars['page']->value['meta_title'];?>
</title>
  <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['meta_description'];?>
">
  <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['meta_keywords'];?>
">
  <meta name="robots" content="robots">
  <link rel="canonical" href="canonical">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_31934934660a8fa66166f98_26193212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_31934934660a8fa66166f98_26193212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_157418780360a8fa66169567_00969460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_157418780360a8fa66169567_00969460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="favicon">
  <link rel="shortcut icon" type="image/x-icon" href="favicon">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_19706626860a8fa6616e3a9_24276640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_19706626860a8fa6616e3a9_24276640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
?>
  <?php
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_132171431560a8fa66178363_81882003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_132171431560a8fa66178363_81882003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
?>
  <?php
}
}
/* {/block 'javascript_head'} */
}
