<?php

class User{
	public $firtsname;
	public $lastname;


public function hello(){
	return "hello". $this->firstname. "";
	}


public function register(){

	echo $this-> firstname. " ".$this-> lastname. " registered ";

	return $this;

	}

public function mail(){

	echo " emailed";

	}
}


$user1 = new User();
$user1-> firstname = "joe";
$user1-> lastname = "doe";

$user1 -> register() -> mail();

