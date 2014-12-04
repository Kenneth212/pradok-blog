<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>
	
<form method="post" action="">
	<div>
	<!-- makes the user a place to put email -->
	 	<label for="email">Email: </label>
	 	<input type="text" name="email" />
	</div>

	<div>
	<!-- makes the user a place to put the username -->
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

	<div>
	<!-- makes the user a place to put the password -->
		<label for="password">Password: </label>
		<input type="password" name="password" />		
	</div>

	<div>
	<!-- adds on a sumbit button -->
		<button type="submit">Submit</button>
	</div>
</form>
