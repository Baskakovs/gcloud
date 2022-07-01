<?php

class CreateDb
{
	public $servername;
	public $username;
	public $password;
	public $dbname;
	public $tablename;
	public $con;

	// class constructor
	public function __construct(
		$dbname = "website",
		$tablename = "menu",
		$servername = "35.223.122.176",
		$username = "tranquility",
		$password = "space"
	)
	{
	 $this->dbname = $dbname;
	 $this->tablename = $tablename;
	 $this->servername = $servername;
	 $this->username = $username;
	 $this->password = $password;
	
	// create connection
	$this->con = mysqli_connect($servername,$username,$password);

	// check connection
	if(!$this->con){
		die("Connection Failed : ". mysqli_connect_error);
	}

	// create db
	$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

	if(mysqli_query($this->con, $sql)){
		$this->con = mysqli_connect($servername,$username,$password,$dbname);
	}else{
		return false;
	}
  }
  //get info
  public function getData($tablename){
	$sql = "SELECT * FROM $tablename";

	$result = mysqli_query($this->con, $sql);

	if(mysqli_num_rows($result)>0){
		return $result;
	}
  }
}