<?php

	$query	= "select * from campuses order by name";
	$result = mysqli_query($connection, $query);

	while($row = $result->fetch_assoc())
		$campus_data[]=$row;
	if(isset($campus_data))
		$campuses=&$campus_data;