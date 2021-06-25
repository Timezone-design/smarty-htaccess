
{extends file='layout.tpl'}

    {block name="content"}
        <div class="main_c grey-wrapper row">
          <div class="clearfix-s"></div>
          <div class="only_img_pr_back black-wrapper">
            <br>
            <div class="pr_title_1">【ボディ補強パーツ】</div>
          {foreach $page.items as $item}
            <h1 class="ja">{$item->title}</h1>
            <div class="black-seperator"></div>
            <div class="pictures">
              {foreach $item->items as $pic}
                <div><a href="{$pic->link}"><img src="{$pic->image}" alt="{$pic->image_alt}"></a></div>
              {/foreach}
            </div>
          {/foreach}
          </div>
        </div>
    {/block}
