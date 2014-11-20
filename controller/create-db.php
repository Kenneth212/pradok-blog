<?php
	require_once(__DIR__ . "/../model/config.php");

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
	// added paragraph tags to the code