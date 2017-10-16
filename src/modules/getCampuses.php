<?php

	$query	= "select * from campuses order by name";

	$result = mysqli_query($connection, $query);
	//alternative:
	//$result = $connection->query($query);

	while($row = $result->fetch_assoc()){

		$campus_data[]=$row;

	}

	if(isset($campus_data)){

		//header('Content-Type: application/json');

		$campuses=&$campus_data;
		//non-reference
		//$campuses=$data;
		//encoded
		//$campuses= json_encode($data);

	}

	//close mysql connection