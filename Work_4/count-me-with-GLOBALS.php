<?php

$count = 0;

function countME(){
	$GLOBALS['count']++;
}

countME();
countME();

print($count);

?>
