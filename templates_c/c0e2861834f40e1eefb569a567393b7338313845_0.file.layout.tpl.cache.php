<?php
/* Smarty version 3.1.39, created on 2021-05-22 23:32:28
  from 'C:\xampp\htdocs\test\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a9786c675eb2_71547873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0e2861834f40e1eefb569a567393b7338313845' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\layout.tpl',
      1 => 1621719082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_60a9786c675eb2_71547873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '162758776360a9786c660383_76972211';
?>

<!doctype html>
<html>

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147478091260a9786c662419_58298532', 'head');
?>

  </head>

  <body>
    
    <main>

      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173160057760a9786c6643b4_03801710', 'header');
?>

      </header>

      <section id="wrapper">
        <div class="container">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172354452760a9786c666f04_67318251', "content_wrapper");
?>


        </div>
      </section>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171005472260a9786c66a4a3_11783501', "footer");
?>

      </footer>

    </main>

    <?php if ((isset($_smarty_tpl->tpl_vars['javascript']->value))) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176049623860a9786c6735e3_21475704', 'javascript_bottom');
?>

    <?php }?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_147478091260a9786c662419_58298532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_147478091260a9786c662419_58298532',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_173160057760a9786c6643b4_03801710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_173160057760a9786c6643b4_03801710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block "content"} */
class Block_184165089460a9786c6682e1_06967309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_172354452760a9786c666f04_67318251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_172354452760a9786c666f04_67318251',
  ),
  'content' => 
  array (
    0 => 'Block_184165089460a9786c6682e1_06967309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184165089460a9786c6682e1_06967309', "content", $this->tplIndex);
?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "footer"} */
class Block_171005472260a9786c66a4a3_11783501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_171005472260a9786c66a4a3_11783501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_176049623860a9786c6735e3_21475704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_176049623860a9786c6735e3_21475704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
      <?php
}
}
/* {/block 'javascript_bottom'} */
}
