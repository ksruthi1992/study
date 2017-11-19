<?php
	//database connection constants
	require_once('constants/database.php');

	class database_connection{

		protected $connection;

		function __construct($hostname, $username, $password, $database){

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
