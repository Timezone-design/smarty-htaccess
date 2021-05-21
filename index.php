<?php
$uri = $_GET['uri'];

// echo "$folder1/$folder2/$folder3/$file-$cat-$item";
require(__DIR__.'/smarty/libs/Smarty.class.php');
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$templates = array(
	1 => 'index.tpl', 2 => 'shop_menu/index.tpl', 21 => 'shop_menu/large_category.tpl', 22 => 'shop_menu/small_category.tpl', 23 => 'shop_menu/manufacturer.tpl', 24 => 'shop_menu/mounting_price.tpl', 25 => 'shop_menu/product_sales_price.tpl', 26 => 'shop_menu/store_introduction.tpl', 27 => 'shop_menu/factory_introduction.tpl', 28 => 'shop_menu/introduction_to_island.tpl', 29 => 'shop_menu/introduction.tpl', 3 => 'original_product/index.tpl', 31 => 'original_product/original_category.tpl', 32 => 'original_product/original_product_price.tpl', 30 => '', 4 => 'tire_wheel/index.tpl', 41 => 'tire_wheel/tire.tpl', 42 => 'tire_wheel/tire_maker.tpl', 43 => 'tire_wheel/tire_price.tpl', 44 => 'tire_wheel/wheel.tpl', 45 => 'tire_wheel/wheel_maker.tpl', 46 => 'tire_wheel/wheel_price.tpl', 5 => 'campaign/index.tpl', 50 => 'campaign/campaign.tpl', 6 => 'wholesale/index.tpl', 8 => 'company.tpl', 404 => '404.tpl'
);

$page = array(
	'uri' => $uri,
	'id_template' => 404,
	'meta_title' => 'Page Not Found',
	'meta_description' => 'Page Not Found',
	'meta_keywords' => '404',
	'content' => 'Page Not Found'
);

$file = __DIR__.'/db/db.txt';
$handle = fopen($file, "r");
$row = fgetcsv($handle, 0, "\t");

while (($row = fgetcsv($handle, 0, "\t")) !== false) 
{
    $page = array(
    	'uri' => $row[0],
    	'id_template' => $row[1],
    	'meta_title' => $row[2],
    	'meta_description' => $row[3],
    	'meta_keywords' => $row[4],
    	'content' => $row[5]
    );

    if($page['uri'] == $uri) break;
}

fclose($handle);

var_dump($page);
die('ok');

$js_custom_vars = array(
	'google_conversion_id' => 970727982,
	'google_custom_params' => 'window.google_tag_params',
	'google_remarketing_only' => true
);

$javascript = array(
	'head' => array(
		'external' => array("https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js", "https://www.kts-web.com/ajax/jquery.min.js"),
		'inline' => array()
	),
	'bottom' => array(
		'external' => array(),
		'inline' => array()
	)
);

$stylesheets = array(
	'external' => array("/assets/css/web_r.css","/assets/css/header_r.css","/assets/css/pc_left_menu.css","/assets/css/sp_menu.css"),
	'inline' => array()
);

$smarty->assign(array(
	'stylesheets' => $stylesheets,
	'javascript' => $javascript,
	'js_custom_vars' => $js_custom_vars,
	'page' => $page
));

$smarty->display($templates[(int) $page['id_template']]);

echo $uri;