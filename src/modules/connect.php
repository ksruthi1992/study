<?php
	
	$app->get('/connect',function(){
		$servername = "teamtux.ddns.net";
		$username = "congressman";
		$password = "litter box";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";

	});