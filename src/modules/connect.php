<?php
	//database connection constants
	require_once('constants/connection.php');

	class database_connection{

		protected $hostname;
		protected $username;
		protected $password;
		protected $database;

		protected $connection;

		function __construct($hostname, $username, $password, $database){
			$this->hostname=$hostname;
			$this->username=$username;
			$this->password=$password;
			$this->database=$database;

			// Create connection
			$this->connection = new mysqli($hostname, $username, $password, $database);

			// Check connection
			if ($this->connection->connect_error) {
			    die("Connection failed: " . $connection->connect_error);
			}
		}

		function __destruct(){
		    $connectionClosed = $this->connection->close();

		    if($connectionClosed === false){
		        echo "Could not close MySQL connection.";
		    }
		}

		public function get(){
			return $this->connection;
		}

	}

	$connection = new database_connection(HOSTNAME,USERNAME,PASSWORD,DATABASE);