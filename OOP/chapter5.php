<?php

class Car{
	private $model;

	public function __construct($model){
		

		$this-> model = $model;
	}
	public function name(){
		return "car is brand is ". $this-> model." ";
	}
}

$car1 = new Car("bmw");
echo $car1-> name();




