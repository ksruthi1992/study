<?php

	$query	= "select * from floors order by building_id, name";

	$result = mysqli_query($connection, $query);

	

	while($row = $result->fetch_assoc()){

		$floor_data[$row['building_id']][$row['name']]=$row;
		


	}

	if(isset($floor_data)){

		//header('Content-Type: application/json');

		$floors=&$floor_data;

	}

	//close mysql connection