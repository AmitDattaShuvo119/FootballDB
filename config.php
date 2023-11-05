<?php
	$servername= "localhost";
	$username = "root";
	$password = "";
	$dbname= "football";
	
	// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con->connect_errno) {
	printf("Connect failed: %s\n", $conn->connect_error);
	exit();
	}
	else
	printf("Connected");
?>