
{extends file='layout.tpl'}

    {block name="content"}
      <div class="small-category">
        <div>
          <div class="clearfix"></div>
          <div class="banner-wrapper row">
            <div class="small-category-top-img col-md-3 col-sm-5">
              <img src="{$page.img}" alt="{$page.img_alt}" srcset="">
            </div>
            <div class="small-category-top-text col-md-9 col-sm-7">
              <p class="ja">{$page.text}</p>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="clearfix"></div>
        </div>
        <div class="grey-wrapper">
          <div class="clearfix"></div>
          <div class="arrowed-title"><h1 class="ja">ブランドー一覧</h1><img src="/assets/img/blue_arrow.svg" alt="Blue Arrow" srcset="" ></div>
          <div class="clearfix"></div>
          <div class="clearfix"></div>

          <div class="four-tiles row">
            <!-- {php}var_dump($page);{/php} -->
            {foreach $page.items as $item}
              <div class="four-tiles-one col-md-3 col-sm-4 col-xs-6">
                <a href="{$item->link}" class="notype">
                  <img src="{$item->image}" alt="{$item->image_alt}" srcset="">
                  <div class="four-tiles-title">{$item->text}</div>
                </a>
              </div>
            {/foreach}
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    {/block}
