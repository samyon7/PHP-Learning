<?php

$data = 2.50;

switch(gettype($data)){
case 'integer':
	echo "Data type is Integer";
	break;
case 'double':
	echo "Data type is Number Double";
	break;
case 'boolean':
	echo "Data type is Boolean";
	break;
case 'string':
	echo "Data type is string";
	break;
case 'array':
	echo "Data type is Array";
	break;
default:
	echo "Data type is unknown";
	break;
}

?>
