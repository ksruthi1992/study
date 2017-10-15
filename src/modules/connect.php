<?php
	
	$app->get('/connect',function(){
		$servername = "teamtux.ddns.net:3306";
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

/*
	$dbname = 'dev_server';
	$dbuser = 'congressman';
	$dbpass = 'litter box';
	$dbhost = 'teamtux.ddns.net:3306';
	$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
	mysql_select_db($dbname) or die("Could not open the database '$dbname'");
	$result = mysql_query("SELECT id, name FROM employees");
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	    printf("ID: %s  Name: %s <br>", $row[0], $row[1]);
	}
*/