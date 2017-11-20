<?php

    //connection class
    require_once('database_connection.php');
    //campus class
    require_once('campusData.php');
    //database constants
    require_once('constants/database.php');

	$connection = new database_connection(HOSTNAME,USERNAME,PASSWORD,DATABASE);

	$campus = new campusData($connection);
