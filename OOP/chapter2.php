<?php

class User{
	public $firtsname;
	public $lastname;


public function hello(){
	return "hello". $this->firstname. "";
	}
}


$user1 = new User();
$user1-> firstname = "John";
$user1-> lastname = "Doe";

$user2 = new User();
$user2-> firstname ="jane";
$user2-> lastname ="doe";

echo $user1->hello();


