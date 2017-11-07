<?php

	$query	= "select * from building where campus_id = $campusSelected order by name";
	$result = mysqli_query($connection->get(), $query);

	while($row = $result->fetch_assoc())
		$building_data[]=$row;
	if(isset($building_data))
		$buildings=&$building_data;