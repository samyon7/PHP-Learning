<?php

namespace Vehicle;
spl_autoload_register();

final class Car extends AbstractVehicle implements DriveInterface{
	public $doors = 4;
	public $passengerCapacity = 5;
	public $steeringWheel = true;
	public $transmission = 'Manual';
	private $hasKeyinIgnition = true;

	final public function start(){
		if($this->hasKeyinIgnition){
			$this->engineStatus = true;
		}
	}

	public function changeSpeed($speed){
		echo "The car has been accelerated to ".$speed." kph ".PHP_EOL;
	}

	public function changeGear($gear){
		echo "Shifted to gear number ".$gear.".".PHP_EOL;
	}

	public function applyBreak(){
		echo "All 4 breaks in the wheels applied".PHP_EOL;
	}
}

$car = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');
$car->start();
echo "The car is " . ($car->getEngineStatus()?'running':'stopped') . PHP_EOL;
$car->changeGear(1);
$car->changeSpeed(15);
$car->changeGear(2);
$car->changeSpeed(35);
$car->applyBreak();
$car->stop();
echo "The car is " . ($car->getEngineStatus()?'running':'stopped')  . PHP_EOL;

?>
