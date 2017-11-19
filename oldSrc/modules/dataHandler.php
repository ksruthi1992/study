<?php

	$connection = new database_connection(HOSTNAME,USERNAME,PASSWORD,DATABASE);

	$campus = new campusData($connection);

	unset($_SESSION['campus']);
	if(!isset($_SESSION['campus']))
		$_SESSION['campus']=1;

