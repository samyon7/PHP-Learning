<?php

namespace Vehicle;
spl_autoload_register();

class Motorcycle extends AbstractVehicle implements DriveInterface{
	public $noOfWheels = 2;
	public $stroke = 4;

	private $hasKey = true;
	private $hasKicked = true;

	public function start(){
		if($this->hasKey && $this->hasKicked){
			$this->engineStatus = true;
		}
	}

	public function changeSpeed($speed){
		echo "The motorcycle has been accelerated to".$speed."kph".PHP_EOL;
	}

	public function changeGear($gear){
		echo "Gear shifted to".$gear.".".PHP_EOL;
	}

	public function applyBreak(){
		echo "The break applied".PHP_EOL;
	}

	function getPrice(){
		return $this->price - $this->price*0.05;
	}
}

$motorcycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');
$motorcycle->start();
echo "The motorcycle is " . ($motorcycle->getEngineStatus()?'running': 'stopped') . PHP_EOL;
$motorcycle->changeGear(3);
$motorcycle->changeSpeed(35);
$motorcycle->applyBreak();
$motorcycle->stop();
echo "The motorcycle is " . ($motorcycle->getEngineStatus()?'running':'stopped') . PHP_EOL;
$motorcycle->setPrice(5000);
echo "The price is ". $motorcycle->getPrice() . PHP_EOL;

?>
