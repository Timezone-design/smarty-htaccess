<?php
$folder1 = $_GET['folder1'];
$folder2 = $_GET['folder2'];
$folder3 = $_GET['folder3'];
$file = $_GET['file'];
$cat = $_GET['cat'];
$item = $_GET['item'];

// echo "$folder1/$folder2/$folder3/$file-$cat-$item";
require(__DIR__.'/smarty/libs/Smarty.class.php');
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$js_custom_vars = array(
	'google_conversion_id' => '970727982',
	'google_custom_params' => 'window.google_tag_params',
	'google_remarketing_only' => 'true'
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
	'external' => array("web_r.css","header_r.css","pc_left_menu.css","sp_menu.css"),
	'inline' => array()
);

if($file == ''){
	$smarty->assign(
		'stylesheets' => $stylesheets,
		'javascript' => $javascript
		'js_custom_vars' => $js_custom_vars
	);
	
	$smarty->display('index.tpl');
}