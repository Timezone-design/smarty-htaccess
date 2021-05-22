<?php

function smarty_function_product_search($params, $template)
{
   	$csv  = array();
	$position = array();
	$file = __DIR__."/db/position_db.csv";
	$handle = fopen($file, 'r');
	
	while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
		if($data[0] == '10007') $position = explode(";", $data[1]);
	}
	
	array_pop($position);
	fclose($handle);
	$file = __DIR__."/db/products_db.csv";
	$buffer=explode("\n",file_get_contents($file));
	
	foreach($position as $index) {
		$csv[] = explode(",", $buffer[intval($index)]);
	}


	$manufacture = array_column($csv, "0" ) ;
	$model = array_column($csv, "1" ) ;
	$manufacturelist = array_unique($manufacture);
	rsort($manufacturelist);

   	$results = $params['search_values'];

   	$template->assign($params['results'], $results);
}
?>