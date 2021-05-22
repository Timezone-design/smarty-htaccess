<?php
/* Smarty version 3.1.39, created on 2021-05-22 22:32:16
  from 'C:\xampp\htdocs\test\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a96a505c47d3_66349283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0e2861834f40e1eefb569a567393b7338313845' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\layout.tpl',
      1 => 1621715372,
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
function content_60a96a505c47d3_66349283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '48048248760a96a50553dd0_76947684';
?>

<!doctype html>
<html>

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53497898160a96a505a20a2_19818068', 'head');
?>

  </head>

  <body>
    
    <main>

      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26008328260a96a505a9f66_87325561', 'header');
?>

      </header>

      <section id="wrapper">
        <div class="container">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6184713360a96a505b1773_87912609', "content_wrapper");
?>


        </div>
      </section>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30620948660a96a505b6161_20707106', "footer");
?>

      </footer>

    </main>

    <?php if ((isset($_smarty_tpl->tpl_vars['javascript']->value))) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51647487560a96a505c0985_74998317', 'javascript_bottom');
?>

    <?php }?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_53497898160a96a505a20a2_19818068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_53497898160a96a505a20a2_19818068',
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
class Block_26008328260a96a505a9f66_87325561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_26008328260a96a505a9f66_87325561',
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
class Block_84851501660a96a505b36e8_98535413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_6184713360a96a505b1773_87912609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_6184713360a96a505b1773_87912609',
  ),
  'content' => 
  array (
    0 => 'Block_84851501660a96a505b36e8_98535413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84851501660a96a505b36e8_98535413', "content", $this->tplIndex);
?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "footer"} */
class Block_30620948660a96a505b6161_20707106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_30620948660a96a505b6161_20707106',
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
class Block_51647487560a96a505c0985_74998317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_51647487560a96a505c0985_74998317',
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
