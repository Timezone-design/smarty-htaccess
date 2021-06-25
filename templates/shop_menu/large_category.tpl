
{extends file='layout.tpl'}

    {block name="content"}
      <div class="large-category">
        <div>
          <div class="clearfix-s"></div>
          <div class="banner-wrapper row">
            <div class="large-category-top-img col-md-2 col-sm-2 col-xs-3">
              <img src="{$page.img}" alt="{$page.img_alt}" srcset="">
            </div>
            <div class="large-category-top-text col-md-10 col-sm-10 col-xs-9">
              <div class="ja">{$page.text}</div>
            </div>
          </div>
        </div>
        <div class="clearfix-s"></div>
        <div class="grey-wrapper">
          <div class="clearfix-s"></div>
          <div class="arrowed-title"><h1 class="ja">カテゴリー一覧</h1><img src="/assets/img/blue_arrow.svg" alt="Blue Arrow" srcset="" ></div>
          <div class="clearfix"></div>
          <div class="clearfix sp"></div>
          <div class="clearfix sp"></div>
          <div class="clearfix sp"></div>
          
          <div class="three-tiles row">
          {foreach $page.items as $item}
              <div class="three-tiles-one col-md-4 col-sm-4 col-xs-4">
                <a href="{$item->link}" class="notype">
                  <img src="{$item->image}" alt="{$item->image_alt}" srcset="">
                </a>
              </div>
          {/foreach}
          </div>

          <div class="clearfix-s"></div>
        </div>
      </div>
    {/block}
