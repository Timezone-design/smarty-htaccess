{include_php file=$base_url|cat:'/modules/product_search.php'}
{block name='product_search'}
<p>{$sample}</p>
  {if $page.id_template == 1}
  <div class="search-block">
    <h1 class="search">SEARCH</h1>
    <h2>Japanese</h2>
    <form action="/{$page.uri}" method="post">
      <select name="manufacturer">
        <option value="manufacturer1">manufacturer</option>
      </select>
      <select name="type">
        <option value="type1">type</option>
      </select>
      <select name="model">
        <option value="model1">model</option>
      </select>
      <select name="genre">
        <option value="genre1">genre</option>
      </select>
      <br>
      <button type="submit">Search</button>
    </form>
  </div>
  {/if}
{/block}

