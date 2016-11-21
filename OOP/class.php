<?php


class Car{
	//properti
	public $comp;
	public $color = "beige";
	public $hasSunroof = true;

	//memberi method
	public function bel(){
		return " Ponng Pong";
	}


}

$bmw = new Car(); //proses instance
$honda = new Car();

$bmw-> comp = "bmw"; //memberi nilai
$honda-> comp = "honda";
$bmw-> color = "red";
$honda-> color = "white";
 
echo $bmw->color; //echo nilai 
echo "</br>"; 
echo $honda->color;
echo "</br>"; 
echo $bmw->comp;
echo "</br>"; 
echo $honda->comp;
echo "</br>"; 

echo $bmw->bel(); //memanggil method
