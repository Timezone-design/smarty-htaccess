
{extends file='layout.tpl'}

    {block name="content"}
      <div class="large-category">
        <div>
          <div class="clearfix"></div>
          <div class="banner-wrapper row">
            <div class="large-category-top-img col-md-3 col-sm-5">
              <img src="{$page.img}" alt="{$page.img_alt}" srcset="">
            </div>
            <div class="large-category-top-text col-md-9 col-sm-7">
              <div class="ja">{$page.text}</div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="grey-wrapper">
          <div class="clearfix"></div>
          <div class="arrowed-title"><h1 class="ja">カテゴリー一覧</h1><img src="/assets/img/blue_arrow.svg" alt="Blue Arrow" srcset="" ></div>
          <div class="clearfix"></div>
          <div class="clearfix"></div>
          
          {$index = 0}
          {foreach $page.items as $item}
            {if $index % 3 == 0}<div class="three-tiles row">{/if}
              <div class="three-tiles-one col-md-4 col-sm-4">
                <a href="{$item->link}" class="notype">
                  <img src="{$item->image}" alt="{$item->image_alt}" srcset="">
                </a>
              </div>
            {$index = $index + 1}
            {if $index % 3 == 0}</div>{/if}
          {/foreach}

          <div class="clearfix"></div>
        </div>
      </div>
    {/block}
