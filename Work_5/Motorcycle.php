<?php

require_once'Vehicle.php';

class Motorcycle extends Vehicle{
	public $noOfWheels = 2;
	public $stroke = 4;
}

$motorcycle1 = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');
$motorcycle2 = new Motorcycle('Suzuki', 'Gixxer SF', 'Blue', 2, '53WVC14599');
$motorcycle2 = new Motorcycle('Harley Davidson', 'Street 750', 'Black', 2, '53WVC14234');
echo "Available motorcycles are " . Motorcycle::$counter. PHP_EOL;

?>
