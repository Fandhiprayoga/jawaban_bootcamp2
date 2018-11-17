<?php 

$data[0]['itemId']								= "12341822";
$data[0]['itemName']							= "FGX Flannel Shirt";
$data[0]['price']								= 195000;
$data[0]['availableColorAndSize'][0]['color']	= "black-blue";
$data[0]['availableColorAndSize'][0]['size']	= array("M","X","XL");
$data[0]['availableColorAndSize'][1]['color']	= "black-white";
$data[0]['availableColorAndSize'][1]['size']	= array("L");
$data[0]['freeShiping']							= false;


function getProduk($data)
{
	echo json_encode($data);
}

getProduk($data);

 ?>