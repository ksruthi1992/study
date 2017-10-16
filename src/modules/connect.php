<?php
	//MySQLi
	
	function databaseConnection(bool $page){
			//database connection data
		//hostname
		$host = "teamtux.ddns.net";
		//username
		$user = "congressman";
		//password
		$pass = "litter box";
		//database
		$database= "dev_server";

		// Create connection
		$connection = new mysqli($host, $user, $pass, $database);

		// Check connection
		if ($connection->connect_error) {
		    die("Connection failed: " . $connection->connect_error);
		}
		if($page){
			echo "Connection is succesful!";
		} else
			return $connection;
	};

	$app->get('/testConnection',function(){
			databaseConnection(true);
	});

	$connection=databaseConnection(false);
	

	//MySQL PDO
	/*
	$servername = "teamtux.ddns.net";
	$username = "congressman";
	$password = "litter box";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=dev_server", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully"; 
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }
	*/