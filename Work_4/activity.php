<?php

declare(strict_types=1);

function factorial(int $number): float{
	$factorial = $number;
	while($number>2){
		$number--;
		$factorial*=$number;
	}
	return $factorial;
}

function sum(): float{
	return array_sum(func_get_args());
}

function prime(int $number): bool{
	if(2>=$number){
		return false;
	}

	for($i=2; $i<sqrt($number); $i++){
		if ($number%$i===0){
			return false;
		}
	}

	return true;
}

function performOperation(string $operation){
	switch($operation){
		case 'factorial':
			$number = (int)func_get_arg(1);
			return factorial($number);
		case 'sum':
			$params = func_get_args();
			array_shift($params);
			return call_user_func_array('sum',$params);
		case 'prime':
			$number = (int)func_get_arg(1);
			return prime($number);
	}
}

echo performOperation("factorial", 3) . PHP_EOL;
echo performOperation('sum', 2, 2, 2) . PHP_EOL;
echo (performOperation('prime', 3)) ? "The number you entered was prime." . PHP_EOL : "The number you entered was not prime." . PHP_EOL;

?>
