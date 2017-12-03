<?php

    //connection class
    require_once('database_connection.php');
    //campus class
    require_once('campusData.php');
    //data submit class
    require_once('dataSubmit.php');
    //database constants
    require_once('constants/database.php');

	$connection  = new database_connection(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    $campus      = new campusData($connection);
    
    $insert_obj  = new dataSubmit($connection);
