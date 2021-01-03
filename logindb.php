<?php

class employee

{
	private $host="localhost";
	private $database="employee";
	private $username="root";
	private $password="";
	private $mysqli;	

	function __construct(){
	$this->mysqli = new MySQLi($this->host,$this->username,$this->password,$this->database);
		if($this->mysqli->error){
					echo $this->mysqli->error;
		}else{
				// echo "Welcome to Local DataBase";
		}
	}