<?php

require_once'Vehicle.php';

class Car extends Vehicle{
	public $doors = 4;
	public $passengerCapacity = 5;
	public $steeringWheel = true;
	public $transmission = 'Manual';
}

$car1 = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');
$car2 = new Car('Toyota', 'Allion', 'White', 4, '24CJ4568');
$car3 = new Car('Hyundai', 'Elantra', 'Black', 4, '24CJ1234');
$car4 = new Car('Chevrolet', 'Camaro', 'Yellow', 4, '23CJ9397');
echo "Available cars are " . Car::$counter . PHP_EOL;

?>
