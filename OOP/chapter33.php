<?php
//membuat class dan object
class User{
	public $firstname;
	public $lastname;

public function hello(){
	return "hallo";
	}

}
$user1= new User();
$user1-> firstname = "nata";
$user1-> lastname = "gon";

$hallo = $user1->hello();

echo $hallo. " ".$user1->firstname. " ".$user1->lastname.""; 
echo "<br/>";

//memakai $this keyword

class murid{
	public $firstname;
	public $lastname;

	public function hello(){
		return "Hallo ". $this-> firstname. " ". $this-> lastname." ";
	}
}

$murid1 = new murid();

$murid1-> firstname = "nata";
$murid1-> lastname = "gon";

echo $murid1-> hello();
echo "<br/>";


//chaining method dan properti

class pengguna{
	public $name;
	public $age;

	public function daftar(){

		echo " halo ".$this->name. "";
		return $this;
	}
	
	public function umur(){

		echo "umur anda" .$this->age . "";
		return $this;
		}
	}

	$pengguna1 = new pengguna;
	$pengguna1-> name = "nata";
	$pengguna1-> age = 23;

	$pengguna1 ->daftar() -> umur();
	echo "<br/>";


//mengakses private property

class guru {
	private $name;


	public function setName($name){
		return $this-> name = $name;
	}
	public function getName(){
		return $this-> name;
	}
}

$guru1 = new guru();
$guru1->setName("kura kura ninja");
echo $guru1->getName();
echo "<br/>";

//metode __consruct

class hero{
	private $name;

	public function __construct($name){
		$this-> name = $name;
	}

	public function greet(){
		return " The best superhero is ". $this-> name. "";
	}
}

$hero1 = new hero("kinikuman");

echo $hero1-> greet();
























