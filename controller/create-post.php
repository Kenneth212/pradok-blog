<?php
		require_once(__DIR__ . "/../model/config.php");

		$connection = new mysqli($host, $username, $password, $database);
		//added a connection variable
		$title = filter_input(INPUT_POST, "title" , FILTER_SANITIZE_STRING);
		$post = filter_input(INPUT_POST, "post" , FILTER_SANITIZE_STRING);

		echo "<p>Title: $title</p>";
		echo "<p>Post: $post</p>";

		$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

		if($query) {
				echo "<p>Successfully inserted post: $title</p>";
		}
		else {
			echo "<p>" . $_SESSION["connection"]->error"</p>";
		}
		//added another connection variable