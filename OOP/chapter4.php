<?php 


class User{
	private $firstname;

	public function setName($firstname){
		return $this-> firstname = $firstname;
	}

	public function getName(){
		return $this-> firstname; 
	}
}

$user1 = new User();
$user1 -> setName("nata");
echo $user1 -> getName();



