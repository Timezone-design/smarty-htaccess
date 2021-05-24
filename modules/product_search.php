<?php
global $root_dir;
$uri = $_smarty_tpl->tpl_vars['page']->value['uri'] . '#search-block';
if ($_smarty_tpl->tpl_vars['page']->value['id_template'] == 1) {
	$car_manu = isset($_POST['car_manu'])?$_POST['car_manu']:'';
	$car_model_cat = isset($_POST['car_model_cat'])?$_POST['car_model_cat']:'';
	$product_name = isset($_POST['product_name'])?$_POST['product_name']:'';
	$product = isset($_POST['product'])?$_POST['product']:'';
	$file = $root_dir.'/db/car_manus.csv';
	$handle = fopen($file, "r");
	$car_manus = []; $car_model_cats = []; $product_names = []; $filtered_products = [];

	while (($row = fgetcsv($handle, 0, ",")) !== false) 
	{
	    if($row[0] != '') $car_manus[$row[0]] = $row[0];
	}

	fclose($handle);

	if($car_manu != ''){
		$file = $root_dir.'/db/item.gz';
		$handle = gzopen($tempfile, "rb");
    	
		// $handle = fopen($file, "r");
		$products = json_decode(gzread($handle, 150000000));
		
		foreach ($products as $key => $product) {
			if($product->car_manu == $car_manu){
				if($product->car_model_cat != ''){
					$car_model_cats[$product->car_model_cat] = $product->car_model_cat;
					if($car_model_cat == $product->car_model_cat && $car_model_cat != ''){
						$product_names [$product->product_name]= $product->product_name;
						if($product_name != '' && $product_name == $product->product_name)
							$filtered_products []= $product;
					}	
				}
				
			}
		}

		gzclose($handle);
	}

	// var_dump($products[1]);
?>
<div class="search-block" id="search-block">
	<h1 class="search">SEARCH</h1>
	<h2>Japanese</h2>
	<form action="/<?=$uri?>" method="post">
	  <select name="car_manu" onchange="this.form.car_model_cat=''; this.form.product_name = ''; submit(this.form)">
	  	<option value='' <?php if($car_manu == '') echo 'selected'; ?>>メーカーを選ぶ</option>
	  	<?php foreach ($car_manus as $key => $value) { ?>
	    <option value="<?=$value?>" <?php if($car_manu == $value) echo 'selected'; ?>><?=$value?></option>
		<?php } ?>
	  </select>
	  <select name="car_model_cat" onchange="this.form.product_name = ''; submit(this.form)">
	  	<option value='' <?php if($car_model_cat == '') echo 'selected'; ?> >車種を選ぶ</option>
	    <?php foreach ($car_model_cats as $key => $value) { ?>
	    <option value="<?=$value?>" <?php if($car_model_cat == $value) echo 'selected'; ?>><?=$value?></option>
		<?php } ?>
	  </select>
	  <select name="product_name">
	  	<option value='' <?php if($product == '') echo 'selected'; ?>>製品を選ぶ</option>
	  	<?php foreach ($product_names as $key => $value) { ?>
	    <option value="<?=$value?>" <?php if($product_name == $value) echo 'selected'; ?>><?=$value?></option>
		<?php } ?>
	  </select>
	  <br>
	  <button type="submit">Search</button>
	</form>
	<?php if(count($filtered_products) > 0){ ?>
	<div class="search-results">	
		<table class="matching_table_all">
			<thead>
				<tr>
					<td>メーカー名</td>
					<td>商品名</td>
					<td>価格</td>
					<td>車種</td>
					<td>型式</td>
					<td>年式</td>
					<td>駆動</td>
					<td>適合詳細</td>
					<td>仕様</td>
					<td>メーカー品番</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($filtered_products as $key => $value) { ?>
				<tr>
					<td><?=$value->manufacturer_name?></td>
					<td><?=$value->product_name?></td>
					<td><?=$value->price?></td>
					<td><?=$value->car_type?></td>
					<td><?=$value->model?></td>
					<td><?=$value->model_year?></td>
					<td><?=$value->driving?></td>
					<td><?=$value->compliance_details?></td>
					<td><?=$value->specification?></td>
					<td><?=$value->manu_part_number?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php } ?>
</div>
<?php
}
?>
