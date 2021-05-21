
{foreach $javascript.external as $js}
  <script type="text/javascript" src="{$js}"></script>
{/foreach}

{foreach $javascript.inline as $js}
  <script type="text/javascript">
    {$js nofilter}
  </script>
{/foreach}

{if isset($vars) && $vars|@count}
  <script type="text/javascript">
    {foreach from=$vars key=var_name item=var_value}
    var {$var_name} = {$var_value|json_encode nofilter};
    {/foreach}
  </script>
{/if}
