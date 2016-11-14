<?php 

class User {
	
	protected $username;

	public function getUsername()
	{
		return $this->username;
	}


	public function setUsername($username)
	{

		$this->username = $username;

	}
	public function sayHi(){
		echo "halo nama saya". $this->username;
	}
}

$user1 = new User();
$user1->setUsername("nata");
$user1->sayHi();



class Admin extends User {

	public function getRole()
	{
		return 'Admin';

	}
	public function sayHelo(){

		echo "halo nama saya". $this->username;
	}
}




$admin1 = new Admin();
$admin1->setUsername("joni");
echo $admin1->getUsername();
$admin1->sayHelo();

$admin2 = new Admin();
$admin2->setUsername("nata");
$admin2->sayHelo();

