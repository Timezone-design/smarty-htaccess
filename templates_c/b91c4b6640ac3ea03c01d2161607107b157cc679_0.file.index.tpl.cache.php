<?php
/* Smarty version 3.1.39, created on 2021-05-22 23:32:28
  from 'C:\xampp\htdocs\test\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a9786c64b624_50694299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b91c4b6640ac3ea03c01d2161607107b157cc679' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\templates\\index.tpl',
      1 => 1621719066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/product_search.tpl' => 1,
  ),
),false)) {
function content_60a9786c64b624_50694299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '79573724060a9786c601877_30333569';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82903733660a9786c642a39_33849612', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content_menu"} */
class Block_103623493860a9786c6438b1_99210828 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="clearfix"></div>
    <h1 id="menu_title" class="arrowed-title">MENU</h1>
    <br>
    <div class="four-of-a-kind row">
      <div class="four-of-a-kind-one col-md-3" style="background-image: url('/assets/img/10014_3.jpg');">
        <img src="/assets/img/10014_3.jpg" alt="" srcset="" style="visibility: hidden; max-width: 100%; max-height: 100%;">
        <a class="arrowed-link" href="/shop_menu/index.html"><span class="title ja">ショップメニュー</span><span class="ja">詳しく見る</span><img src="/assets/img/white_arrow.svg" alt="Menu Link"></a>
      </div>
      <div class="four-of-a-kind-one col-md-3" style="background-image: url('/assets/img/10014_3.jpg');">
        <img src="/assets/img/10014_3.jpg" alt="" srcset="" style="visibility: hidden; max-width: 100%; max-height: 100%;">
        <a class="arrowed-link" href="/original_product/index.html"><span class="title ja">オリジナル商品</span><span class="ja">詳しく見る</span><img src="/assets/img/white_arrow.svg" alt="Menu Link"></a>
      </div>
      <div class="four-of-a-kind-one col-md-3" style="background-image: url('/assets/img/10014_3.jpg');">
        <img src="/assets/img/10014_3.jpg" alt="" srcset="" style="visibility: hidden; max-width: 100%; max-height: 100%;">
        <a class="arrowed-link" href="/tire_wheel/index.html"><span class="title ja">タイヤ・ホイール</span><span class="ja">詳しく見る</span><img src="/assets/img/white_arrow.svg" alt="Menu Link"></a>
      </div>
      <div class="four-of-a-kind-one col-md-3" style="background-image: url('/assets/img/10014_3.jpg');">
        <img src="/assets/img/10014_3.jpg" alt="" srcset="" style="visibility: hidden; max-width: 100%; max-height: 100%;">
        <a class="arrowed-link" href="/wholesale/index.html"><span class="title ja">業販</span><span class="ja">詳しく見る</span><img src="/assets/img/white_arrow.svg" alt="Menu Link"></a>
      </div>
    </div>
  <?php
}
}
/* {/block "content_menu"} */
/* {block "product_search"} */
class Block_191640365960a9786c645346_84417901 extends Smarty_Internal_Block
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
class Block_20662506360a9786c64a365_50187964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="clearfix"></div>
    <div class="notice">
      <h1 id="notice-title" class="arrowed-title ja">お知らせ</h1>
      <table id="notice-table">
        <tr>
          <td>2021.04.20</td>
          <td><span class="new-notice active">NEW</span><span class="ja">テキストテキストテキストテキスト</span></td>
        </tr>
        <tr>
          <td>2021.04.20</td>
          <td><span class="new-notice">NEW</span><span class="ja">テキストテキストテキストテキスト</span></td>
        </tr>
        <tr>
          <td>2021.04.20</td>
          <td><span class="new-notice">NEW</span><span class="ja">テキストテキストテキストテキスト</span></td>
        </tr>
        <tr>
          <td>2021.04.20</td>
          <td><span class="new-notice">NEW</span><span class="ja">テキストテキストテキストテキスト</span></td>
        </tr>
        <tr>
          <td>2021.04.20</td>
          <td><span class="new-notice">NEW</span><span class="ja">テキストテキストテキストテキスト</span></td>
        </tr>
        <tr>
          <td>2021.04.20</td>
          <td><span class="new-notice">NEW</span><span class="ja">テキストテキストテキストテキスト</span></td>
        </tr>
      </table>
      <div class="clearfix"></div>
      <div class="row">
        <a class="arrowed-link" href="/"><span class="ja">もっと見る</span><img src="/assets/img/black_arrow.svg" alt="Menu Link"></a>
      </div>
      <div class="clearfix"></div>
      <div class="clearfix"></div>
      <div class="clearfix"></div>
      <div class="clearfix"></div>
    </div>
  <?php
}
}
/* {/block "notice"} */
/* {block "content"} */
class Block_82903733660a9786c642a39_33849612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_82903733660a9786c642a39_33849612',
  ),
  'content_menu' => 
  array (
    0 => 'Block_103623493860a9786c6438b1_99210828',
  ),
  'product_search' => 
  array (
    0 => 'Block_191640365960a9786c645346_84417901',
  ),
  'notice' => 
  array (
    0 => 'Block_20662506360a9786c64a365_50187964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103623493860a9786c6438b1_99210828', "content_menu", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191640365960a9786c645346_84417901', "product_search", $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20662506360a9786c64a365_50187964', "notice", $this->tplIndex);
?>


<?php
}
}
/* {/block "content"} */
}
