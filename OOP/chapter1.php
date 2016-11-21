<?php

class User{
	public $firtsname;
	public $lastname;


public function hello(){
	return "hello";
	}
}


$user1 = new User();
$user1-> firstname = "John";
$user1-> lastname = "Doe";

$user2 = new User();
$user2-> firstname ="jane";
$user2-> lastname ="doe";


$hallo = $user1->hello();


echo $user1->firstname;
echo "<br/>";
echo $user1->lastname;
echo "<br/>";
echo $user1->hello();
echo "<br/>";
echo $user2->hello();
echo "<br/>";
echo $hallo. " ". $user1->firstname. " " .$user1->lastname. " ";
echo "<br/>";
echo $hallo." ". $user2->firstname." ".$user2->lastname." ";






