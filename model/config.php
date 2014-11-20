<?php
	require_once(__DIR__ . "/database.php");
	// added this as a config file
	$path = "/pradok-blog/";

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";
	// based off of the old class
	// the database object is going to query the database
	$connection = new Database($host, $username, $password, $database);
