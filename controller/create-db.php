<?php
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	if($connection->connect_error) {
		
	die("Error: " . $connection->connect_error);

	}

	$exists = $connection->select_db($database);
	
	if(!$exists) {
		// sends commands to the database
		$query = $connection->query("CREATE DATABASE $database");
		// checks if our query is successful
		if($query) {
			echo "Successfully created database: " . $database;
		}
	}
	// 	shows that DATABASE exists 
	else {
		echo "DATABASE already exists.Successfully create table posts";
	}

	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar (255) NOT NULL,"
		. "posts text NOT NULL,"
		. "PRIMARY KEY (id))");

	if ($query) {
		echo "Successfully create table: posts";
	}

	$connection->close(); 