<?php

namespace Vehicle;

abstract class AbstractVehicle{
	use \Traits\PriceTrait;
    public $make;
    public $model;
    public $color;
    protected $noOfWheels; 
    private $engineNumber;
    private $runtimeAttributes = array();
    public static $counter = 0;
    protected $engineStatus = false;
    protected $price;

    function stop(){
    	return $this->engineStatus = false;
    }

    function getEngineStatus(){
    	return $this->engineStatus;
    }

    function __construct($make = 'DefaultMake', $model = 'DefaultModel', $color = 'DefaultColor', $wheels = 4, $engineNo = 'XXXXXXXX')
    {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->noOfWheels = $wheels;
	$this->engineNumber = $engineNo;
	self::$counter++;
    }

    function __set($attribute, $value){
    	$this->runtimeAttributes[$attribute] = $value;
    }

    function __get($attribute){
    	if(array_key_exists($attribute, $this->runtimeAttributes)){
		return $this->runtimeAttributes[$attribute];
	}
	else{
		echo "Error : undefined attribute.".PHP_EOL;
	}
    }

    function __call($method, $arguments){
	    switch($method){
	    	case 'honk':
			if(isset($arguments[0])){
				echo "Honking $arguments[0]...".PHP_EOL;
			}
			else{
				echo "Honking ...".PHP_EOL;
			}

			if(isset($arguments[1])){
				echo "$arguments[1] enabled ...".PHP_EOL;
			}
			break;

		default:
			echo "The method $method() is called".PHP_EOL;
			break;
	    }
    }

    function getMake()
    {
        return $this->make;
    }

    function getModel()
    {
        return $this->model;
    }

    function getColor()
    {
        return $this->color;
    }

    function getNoOfWheels()
    {
        return $this->noOfWheels;
    }

    function getEngineNumber()
    {
        return $this->engineNumber;
    }

    function setMake($make)
    {
        $this->make = $make;
    }

    function setModel($model)
    {
        $this->model = $model;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function setNoOfWheels($wheels)
    {
        $this->noOfWheels = $wheels;
    }

    function setEngineNumber($engineNo)
    {
        $this->engineNumber = $engineNo;
    }
}
