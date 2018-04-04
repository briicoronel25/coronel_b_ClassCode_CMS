<?php
	// Set up connection credentials
	$user = "root";
	$pass = "root";
	$url = "localhost";
	$db = "cms_movies";
	$port= "8889";
	
	$link = mysqli_connect($url, $user, $pass, $db,$port);
	
	/* check connection */ 	
	if(mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>