
{extends file='layout.tpl'}

    {block name="content"}
      <div class="large-category">
        <div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="large-category-top-img col-md-3">
              <img src="{$page.img}" alt="{$page.img_alt}" srcset="">
            </div>
            <div class="large-category-top-text col-md-9">
              <p class="ja">{$page.text}</p>
            </div>
          </div>
        </div>
        <div>
          <div class="clearfix"></div>

          {$index = 0}
          {foreach $page.items as $item}
            {if $index % 3 == 0}<div class="three-tiles row">{/if}
              <div class="three-tiles-one col-md-4">
                <a href="{$item->link}" class="notype">
                  <img src="{$item->image}" alt="{$item->image_alt}" srcset="">
                  <span class="three-tiles-blue-border">Suspension</span>
                  <span class="three-tiles-title ja">足回り</span>
                  <span class="three-tiles-text ja">バーツ販売だけでなく取り付けまで一貸して<br>対応いたします。</span>
                </a>
              </div>
            {$index = $index + 1}
            {if $index % 3 == 0}</div>{/if}
          {/foreach}

          <div class="clearfix"></div>
        </div>
      </div>
    {/block}
