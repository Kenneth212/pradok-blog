<?php
	// this require once connects to config.php
	require_once(__DIR__ ."/../model/config.php");
	// creates a connection that leads to index.php
?>
	
<nav>
	<ul>
		<li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
	</ul>
</nav>