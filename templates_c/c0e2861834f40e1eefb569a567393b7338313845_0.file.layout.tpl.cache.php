<?php
/* Smarty version 3.1.39, created on 2021-05-22 14:34:46
  from 'C:\xampp\htdocs\test\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a8fa660e4985_20152249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0e2861834f40e1eefb569a567393b7338313845' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\layout.tpl',
      1 => 1621653398,
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
function content_60a8fa660e4985_20152249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '99383390860a8fa660288b2_73034784';
?>

<!doctype html>
<html>

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183866383160a8fa6602cec5_88541965', 'head');
?>

  </head>

  <body>
    
    <main>

      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25737437460a8fa66030fc0_62864038', 'header');
?>

      </header>

      <h1><?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>
</h1>

      <section id="wrapper">
        <div class="container">

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180206041960a8fa660a4eb0_51102414', "content_wrapper");
?>


        </div>
      </section>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109933035860a8fa660abf07_95897266', "footer");
?>

      </footer>

    </main>

    <?php if ((isset($_smarty_tpl->tpl_vars['javascript']->value))) {?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129295698460a8fa660dc0c2_56473099', 'javascript_bottom');
?>

    <?php }?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_183866383160a8fa6602cec5_88541965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_183866383160a8fa6602cec5_88541965',
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
class Block_25737437460a8fa66030fc0_62864038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_25737437460a8fa66030fc0_62864038',
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
class Block_100654796460a8fa660a6e04_02929243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_180206041960a8fa660a4eb0_51102414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_180206041960a8fa660a4eb0_51102414',
  ),
  'content' => 
  array (
    0 => 'Block_100654796460a8fa660a6e04_02929243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100654796460a8fa660a6e04_02929243', "content", $this->tplIndex);
?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "footer"} */
class Block_109933035860a8fa660abf07_95897266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_109933035860a8fa660abf07_95897266',
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
class Block_129295698460a8fa660dc0c2_56473099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_129295698460a8fa660dc0c2_56473099',
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
