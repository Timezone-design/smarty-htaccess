
{extends file='layout.tpl'}

    {block name="content"}
      <div class="clearfix"></div>
      <div class="original-category">
        <div class="clearfix"></div>
        <div class="grey-wrapper row">
          {foreach $page.items as $item}
            <div class="clearfix"></div>
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
