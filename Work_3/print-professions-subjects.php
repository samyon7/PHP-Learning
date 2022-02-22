<?php

$professions = ["Doctor", "Teacher", "Programmer", "Lawyer", "Athlete"];
$subjects =  ["Mathematics", "Computer Programming", "Business English", "Graph Theory"];


foreach($professions as $profession){
	echo "The profession is $profession".PHP_EOL;

	if($profession === 'Teacher'){
		foreach($subjects as $name){
			echo "$name".PHP_EOL;
		}
	}
}

?>
