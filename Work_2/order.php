<?php

$str = 'Your order total is :';
$order = 20;
$additional = 5;
$orderTotal = 0;
$complete = false;

$orderTotal = $order+$additional;

if($orderTotal){
	$complete = true;
	echo $str.$orderTotal;
}

?>
