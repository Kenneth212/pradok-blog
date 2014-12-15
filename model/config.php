<?php
	require_once(__DIR__ . "/Database.php");
	require_once(__DIR__ . "/date.php");
	session_start();
	session_regenerate_id(true);

	$path = "/pradok-blog/";

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";
	// based off of the old class
	// the database object is going to query the database
	// sessions used to save databse objects
	// session equal to database connection

	if(!isset($_SESSION["connection"])) {
		$connection = new Database($host, $username, $password, $database);
		$_SESSION["connection"] = $connection;
	}
