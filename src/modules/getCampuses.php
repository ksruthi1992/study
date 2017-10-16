<?php
	
	

	$query	= "select * from campuses order by name";
	$result = $connection->query($query);
	
	while($row = $result->fetch_assoc()){
		$data[]=$row;
	}

	if(isset($data)){
		header('Content-Type: application/json');
		//$campuses= json_encode($data);
		$campuses=&$data;
	}


