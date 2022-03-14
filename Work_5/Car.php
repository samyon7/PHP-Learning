<?php

require_once'AbstractVehicle.php';

class Car extends AbstractVehicle{
	public $doors = 4;
	public $passengerCapacity = 5;
	public $steeringWheel = true;
	public $transmission = 'Manual';
	private $hasKeyinIgnition = true;

	public function start(){
		if($this->hasKeyinIgnition){
			$this->engineStatus = true;
		}
	}
}

$car = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');
$car->start();
echo "The car is " . ($car->getEngineStatus()?'running':'stopped') . PHP_EOL;
$car->stop();
echo "The car is " . ($car->getEngineStatus()?'running':'stopped') . PHP_EOL;


?>
