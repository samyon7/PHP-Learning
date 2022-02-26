<?php

$number = 1;

while($number <= 10){
	echo $number." ";
	if($number === 8){
		echo "Ends the exection loops";
		break;
	}

	$number++;
}

?>
