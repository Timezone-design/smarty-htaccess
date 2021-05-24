<?php
global $root_dir;
$file = $root_dir.'/db/item.csv';
$handle = fopen($file, "r");
$row = fgetcsv($handle, 0, ",");

while (($row = fgetcsv($handle, 0, ",")) !== false) 
{
    $product = array(
    	'manufacturer_name' => (string) $row[3],
    	'product_name' => (string) $row[4],
    	'price' =>  $row[17],
    	'car_type' => (string) $row[8],
    	'model' => (string) $row[9],
    	'model_year' => (string) $row[10],
    	'driving' => (string) $row[11],
    	'compliance_details' => (string) $row[12],
    	'specification' => (string) $row[13],
    	'manu_part_number' => (string) $row[5],
    	'car_manu' => (string) $row[7],
    	'car_model_cat' => (string) $row[1]
    );

    // var_dump($product);
    break;
}
fclose($handle);