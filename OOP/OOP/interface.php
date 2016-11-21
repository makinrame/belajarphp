<?php


interface PaymentGateway 
{
	public function pay();
	public function credit();
}

class BankTransfer implements PaymentGateway{
	public function pay(){
		echo "bayar pakai bank transfer";
	}
	public function credit(){

	}
}

class Kredit implements PaymentGateway{
	public function pay(){
		echo "bayar pakai Kredit";
	}
	public function credit(){

	}
}

$payment = new Kredit();


class User {
	
	public $username;

	public function getUsername()
	{
		return $this->username;
	}


	public function setUsername($username)
	{

		$this->username = $username;

	}
	public function pay(PaymentGateway $payment){
		$payment->pay();

	}

}

$user1 = new User();
$user1->pay($payment);
