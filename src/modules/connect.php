<?php
/*
 * Do not modify this without talking to me about it first
 * we need to work AS A TEAM.
 *
 * Thanks,
 *     Luke 916 952 4724
 *
 */
	
class connection{

  //hostname
  $host = "teamtux.ddns.net";
  //username
  $user = "congressman";
  //password
  $pass = "h@llar!d0n@ld";
  //database
  $database= "spotfinder_db";

  $link = mysqli_connect($host, $user, $pass, $database);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

	//Mysqli	
	//database connection data
	/*
	 * 
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

	 */
}
