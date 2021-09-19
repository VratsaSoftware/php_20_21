<?php

class Database
{
	public $username;
	public $password;
	public $server;
	public $db;

	public function connect(){

		return 'connected';
	}

	public function getContent(){

		return 'This is Lorem Ipsum From Db';
	}
}