{product_search search_values=$search_values results='results'}

{block name='product_search'}
  {if $page.id_template == 1}
    <select name="manufacturer">
      <option></option>
    </select>
    <select name="type">
      <option></option>
    </select>
    <select name="model">
      <option></option>
    </select>
    <select name="genre">
      <option></option>
    </select>
  {/if}
{/block}

