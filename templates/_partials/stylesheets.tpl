
{foreach $stylesheets.external as $stylesheet}
  <link rel="stylesheet" href="{$stylesheet}" type="text/css">
{/foreach}

{foreach $stylesheets.inline as $stylesheet}
  <style>
    {$stylesheet}
  </style>
{/foreach}
