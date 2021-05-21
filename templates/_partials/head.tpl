
{block name='head_charset'}
  <meta charset="utf-8">
{/block}
{block name='head_ie_compatibility'}
  <meta http-equiv="x-ua-compatible" content="ie=edge">
{/block}

{block name='head_seo'}
  <title>{$page.meta_title}</title>
  <meta name="description" content="{$page.meta_description}">
  <meta name="keywords" content="{$page.meta_keywords}">
  <meta name="robots" content="robots">
  <link rel="canonical" href="canonical">
{/block}

{block name='head_viewport'}
  <meta name="viewport" content="width=device-width, initial-scale=1">
{/block}

{block name='head_icons'}
  <link rel="icon" type="image/vnd.microsoft.icon" href="favicon">
  <link rel="shortcut icon" type="image/x-icon" href="favicon">
{/block}

{if isset($stylesheets)}
  {block name='stylesheets'}
    {include file="_partials/stylesheets.tpl" stylesheets=$stylesheets}
  {/block}
{/if}

{if isset($javascript)}
  {block name='javascript_head'}
    {include file="_partials/javascript.tpl" javascript=$javascript.head vars=$js_custom_vars}
  {/block}
{/if}
