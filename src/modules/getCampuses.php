<?php

	$query	= "select * from campuses order by name";
	$result = $connection->query($query);
	
	while($row = $result->fetch_assoc()){
		$data[]=$row;
	}

	if(isset($data)){
		header('Content-Type: application/json');
		$campuses=&$data;

		//non-reference
		//$campuses=$data;

		//encoded
		//$campuses= json_encode($data);
	}
