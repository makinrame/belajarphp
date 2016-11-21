<?php


class Food {
	public $name;
	public $color;

public function eat(){
	return "hello saya " .$this->name. " warna saya " .$this->color. "";
	}
}

$food1 = new Food();
$food2 = new Food();

$food1-> name = "biu";
$food2-> name = "beguling";
$food1-> color = "kuning";
$food2-> color = "cokelat";


echo $food1->eat();
echo "<br/>";
echo $food2->eat();