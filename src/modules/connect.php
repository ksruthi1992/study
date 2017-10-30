<?php
	//MySQLi

interface Connection{	
	function databaseConnection(bool $page){
			//database connection data
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
		if($page){
			echo "Connection is succesful!";
		} else
			return $connection;
	};

	$app->get('/testConnection',function(){
			databaseConnection(true);
	});

	$connection=databaseConnection(false);
}
