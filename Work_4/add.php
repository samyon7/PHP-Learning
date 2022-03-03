<?php

function add($param1, $param2): string{
	if (false === is_numeric($param1)){
		throw new DomainException('$param1 should be numeric');
	}

	if (false === is_numeric($param2)){
		throw new DomainException('$param2 should be numeric');
	}

	$sum = $param1 + $param2;

	return "The sum is $sum";
}

echo add(1,2);

?>
