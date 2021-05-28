
{extends file='layout.tpl'}

{block name="content"}
  
  {block name="content_menu"}
    <div class="clearfix"></div>
    <div id="menu-title" class="arrowed-title"><h1>MENU</h1><img src="/assets/img/blue_arrow.svg" alt="Blue Arrow" srcset=""></div>
    <div class="clearfix"></div>
    <br>
    <div class="four-of-a-kind row">
      <div class="four-of-a-kind-one col-md-3 col-sm-3" style="background-image: url('/assets/img/four-of-a-kind/1.webp');">
        <img src="/assets/img/four-of-a-kind/1.webp" alt="" srcset="" style="visibility: hidden; max-width: 100%; max-height: 100%;">
        <a class="arrowed-link white" href="/shop_menu/index.html"><span class="title ja">ショップメニュー</span><span class="ja">詳しく見る</span><img src="/assets/img/white_arrow.svg" alt="Menu Link"></a>
      </div>
      <div class="four-of-a-kind-one col-md-3 col-sm-3" style="background-image: url('/assets/img/four-of-a-kind/2.webp');">
        <img src="/assets/img/four-of-a-kind/2.webp" alt="" srcset="" style="visibility: hidden; max-width: 100%; max-height: 100%;">
        <a class="arrowed-link white" href="/product/index.html"><span class="title ja">オリジナル商品</span><span class="ja">詳しく見る</span><img src="/assets/img/white_arrow.svg" alt="Menu Link"></a>
      </div>
      <div class="four-of-a-kind-one col-md-3 col-sm-3" style="background-image: url('/assets/img/four-of-a-kind/3.webp');">
        <img src="/assets/img/four-of-a-kind/3.webp" alt="" srcset="" style="visibility: hidden; max-width: 100%; max-height: 100%;">
        <a class="arrowed-link white" href="/tire_wheel/index.html"><span class="title ja">タイヤ・ホイール</span><span class="ja">詳しく見る</span><img src="/assets/img/white_arrow.svg" alt="Menu Link"></a>
      </div>
      <div class="four-of-a-kind-one col-md-3 col-sm-3" style="background-image: url('/assets/img/four-of-a-kind/4.webp');">
        <img src="/assets/img/four-of-a-kind/4.webp" alt="" srcset="" style="visibility: hidden; max-width: 100%; max-height: 100%;">
        <a class="arrowed-link white" href="/wholesale/index.html"><span class="title ja">業販</span><span class="ja">詳しく見る</span><img src="/assets/img/white_arrow.svg" alt="Menu Link"></a>
      </div>
    </div>
  {/block}

  {block name="product_search"}
    {include_php file=$base_url|cat:'/modules/product_search.php'}
  {/block}

  {block name="notice"}
    <div class="clearfix"></div>
    <div class="notice">
      <div id="notice-title" class="arrowed-title"><h1 class="ja">お知らせ</h1><img src="/assets/img/blue_arrow.svg" alt="Blue Arrow" srcset=""></div>
      <div class="clearfix"></div>

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
