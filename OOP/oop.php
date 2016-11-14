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
}

$user1 = new User();
$user1->setUsername("nata");
echo $user1->getUsername();


$user2 = new User();
$user2->setUsername("adi");
echo $user2->getUsername();


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

echo $admin1->getRole();
$admin1->setUsername("joni");
echo $admin1->getUsername();
$admin1->sayHelo();