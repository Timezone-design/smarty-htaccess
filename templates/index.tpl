
{extends file='layout.tpl'}

{block name="content"}
  
  {block name="content_menu"}
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
  {/block}

  {block name="product_search"}
  	{include file='_partials/product_search.tpl'}
  {/block}

  {block name="notice"}
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
  {/block}

{/block}
