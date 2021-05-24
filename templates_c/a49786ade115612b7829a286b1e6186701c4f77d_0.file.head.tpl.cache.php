<?php
/* Smarty version 3.1.39, created on 2021-05-22 21:53:34
  from 'C:\xampp\htdocs\test\templates\_partials\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a9613e91b972_98072457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a49786ade115612b7829a286b1e6186701c4f77d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\_partials\\head.tpl',
      1 => 1621712983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_60a9613e91b972_98072457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '115023713460a9613e3d1149_81528730';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136883256760a9613e79eaf1_45797173', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178473319060a9613e83fe52_41019899', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74451764260a9613e842fe7_62001698', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157339879260a9613e87adc8_30904173', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104884187660a9613e87e0c6_87793242', 'head_icons');
?>


<?php if ((isset($_smarty_tpl->tpl_vars['stylesheets']->value))) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117282617160a9613e8f6092_31868076', 'stylesheets');
?>

<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['javascript']->value))) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24132202860a9613e9153e9_16595171', 'javascript_head');
?>

<?php }
}
/* {block 'head_charset'} */
class Block_136883256760a9613e79eaf1_45797173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_136883256760a9613e79eaf1_45797173',
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
class Block_178473319060a9613e83fe52_41019899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_178473319060a9613e83fe52_41019899',
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
class Block_74451764260a9613e842fe7_62001698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_74451764260a9613e842fe7_62001698',
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
class Block_157339879260a9613e87adc8_30904173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_157339879260a9613e87adc8_30904173',
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
class Block_104884187660a9613e87e0c6_87793242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_104884187660a9613e87e0c6_87793242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="favicon">
  <link rel="shortcut icon" type="image/x-icon" href="favicon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_117282617160a9613e8f6092_31868076 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_117282617160a9613e8f6092_31868076',
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
class Block_24132202860a9613e9153e9_16595171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_24132202860a9613e9153e9_16595171',
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
