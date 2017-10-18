<?php

/*Data insertion method
*/
//jason object
//access jason object
//insert into database

$serverName = "localhost";
$userName = "dev";
$password = "";
$dbName = "dev_server";

// Create connection

$conn = new mysqli($serverName, $userName,"");

// Check connection

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "Super sweet connection made. \n";
}

$conn = "INSERT INTO data (floorNumber, availability, buildingNumber)
VALUES (jasonObject.floorNumber, jasonObject.availability, jasonObject.buildingNumber)";
?>
