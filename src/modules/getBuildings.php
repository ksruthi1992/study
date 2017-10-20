<?php

	$query	= "select * from building where campus_id = $campusSelected order by name";

	$result = mysqli_query($connection, $query);

	while($row = $result->fetch_assoc()){

		$building_data[]=$row;

	}

	if(isset($building_data)){

		//header('Content-Type: application/json');

		$buildings=&$building_data;

	}

	//close mysql connection