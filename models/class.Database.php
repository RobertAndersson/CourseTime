<?php

class Database{
	public $connection;
	function __construct(){
		$this->connection = mysqli_connect("localhost", "root", "", "coursetime")
			or die("Error: ({$this->connection->connect_errno}) {$this->connection->connect_error}");

	} 

	function query($query){
		return $this->connection->query($query)
			or die("Query error: " . $this->connection->error);
	}
}

?>
