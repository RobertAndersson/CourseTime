<?php

class User{
	private $db;
	function __construct($_db){
		$this->db = $_db;
	}

	function AddUser($name, $mail, $password, $salt, $education){
	$this->db->query("INSERT INTO users VALUES('NULL', '$name', '$mail', '$password', '$salt', '$education')")
		or die("Query error: " . $db->error);
	}

	function GetUser($userId){
		$result = $this->db->connection->query("SELECT * FROM users WHERE userId = '$userId'")
			or die("Query error: " . $this->db->error);

		return $result;
	}
}
?>
