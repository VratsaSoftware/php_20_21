<?php

class User
{
	//public $username;
	//protected $username;
	private $username;

	public function setName($name){
		$this->username = $name;
	}

	public function getUsername(){
		return $this->username;
	}
}

class Admin extends User{

	public function getUsernameFromAdminClass(){
		return $this->username;
	}

}

// $user = new User;
// // $user->username = 'Pepi';
// $user->setName('Pepi');
// echo $user->getUsername();
$admin = new Admin;
// $admin->username = 'Georgi';
$admin->setName('Georgi');
// echo $admin->getUsername();
echo $admin->getUsernameFromAdminClass();

