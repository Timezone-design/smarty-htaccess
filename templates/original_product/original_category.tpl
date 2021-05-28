
{extends file='layout.tpl'}

    {block name="content"}
      <div class="original-category">
        <div class="clearfix"></div>
        <div class="grey-wrapper row">
          {foreach $page.items as $item}
            <div class="clearfix"></div>
            <div class="arrowed-title"><h1 class="ja">{$item->title}</h1><img src="/assets/img/blue_arrow.svg" alt="Blue Arrow" srcset="" ></div>
            <div class="seperator"></div>
            <div class="pictures">
              {foreach $item->items as $pic}
                <div><a href="{$pic->link}"><img src="{$pic->image}" alt="{$pic->image_alt}"></a></div>
              {/foreach}
            </div>
          {/foreach}
        </div>
      </div>
    {/block}
