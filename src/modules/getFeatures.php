<?php

	$query	= "select * from features order by building_id, floor_id";
	$result = mysqli_query($connection, $query);

	while($row = $result->fetch_assoc())
		$features_data[$row['building_id']][$row['floor_id']]=$row;
	if(isset($floor_data))
		$features=&$features_data;