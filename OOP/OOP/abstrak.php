<?php 

 abstract class User {
	
	protected $username;

	public function getUsername()
	{
		return $this->username;
	}


	public function setUsername($username)
	{

		$this->username = $username;

	}
	abstract public function getRole();
}


class Admin extends User {

	public function getRole()
	{
		return 'Admin';

	}
	public function sayHelo(){

		echo "halo nama saya". $this->username;
	}
}

class Customer extends User{
	public function getRole(){
		echo "customer". $this->username;
	}


}


$customer1 = new Customer();
$customer1->getUsername("nata");
$customer1->getRole();



$admin1 = new Admin();

echo $admin1->getRole();
$admin1->setUsername("joni");
echo $admin1->getUsername();
$admin1->sayHelo();