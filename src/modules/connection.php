<?php
	//we need to objectify this and data.
	//Mysqli	
	//database connection data
	function databaseConnection(bool $testRequest){
		//hostname
		$host = "teamtux.ddns.net";
		//username
		$user = "congressman";
		//password
		$pass = "h@llar!d0n@ld";
		//database
		$database= "spotfinder_db";

		// Create connection
		$connection = new mysqli($host, $user, $pass, $database);

		// Check connection
		if ($connection->connect_error) {
		    die("Connection failed: " . $connection->connect_error);
		}

		//if the connection wants to be tested, then perform an output of the results
		if($testRequest==true){
			echo "Connection is succesful!";
		} else
			return $connection;
	};

	//connection tester
	$app->get('/testConnection',function(){
            return databaseConnection(true);
		}
	);

	//set to false to connect without performing a test
	$connection=databaseConnection(false);
