<?php
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	if($connection->connect_error) {
		
	die("<p>Error: " . $connection->connect_error . "</p>");

	}

	$exists = $connection->select_db($database);
	
	if(!$exists) {
		// sends commands to the database
		$query = $connection->query("CREATE DATABASE $database");
		// checks if our query is successful
		if($query) {
			echo "<p>Successfully created database: " . $database . "</p>";
		}
	}
	// 	shows that DATABASE exists 
	else {
		echo "<p>DATABASE already exists.</P>";
	}

	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar (255) NOT NULL,"
		. "posts text NOT NULL,"
		. "PRIMARY KEY (id))");

	if ($query) {
		echo "Successfully create table: posts";
	}
	else {
		echo "<p>$connection->error</p>";
	}

	$connection->close(); 