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

die('smarty ok');
if($file == ''){
	$smarty->display('index.tpl');
}