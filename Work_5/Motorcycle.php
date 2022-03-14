<?php

require_once'AbstractVehicle.php';

class Motorcycle extends AbstractVehicle{
	public $noOfWheels = 2;
	public $stroke = 4;

	private $hasKey = true;
	private $hasKicked = true;

	public function start(){
		if($this->hasKey && $this->hasKicked){
			$this->engineStatus = true;
		}
	}
}

$motorcycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');
$motorcycle->start();
echo "The motorcycle is " . ($motorcycle->getEngineStatus()?'running': 'stopped') . PHP_EOL;
$motorcycle->stop();
echo "The motorcycle is " . ($motorcycle->getEngineStatus()?'running': 'stopped') . PHP_EOL;


?>
