<?php


	class campusData{
		protected $connection;

		function __construct($connection){
			$this->connection=$connection;
		}

		public function showCampus($campus){
			if($campus=="all")
				$query="select * from campuses order by name";
			else{
				$campus=(int)$campus;
				$query="select * from campuses where id = $campus order by name";
			}

			$result = mysqli_query($this->connection->get(), $query);

			while($row = $result->fetch_assoc())
				$data_array[]=$row;
			
			return $data_array;
		}
		
		public function showBuilding($campus, $building){
			if($building=="all"){
				$campus = (int)$campus;
				$query="select * from buildings where campusId = $campus order by name";
			}else{
				$campus=(int)$campus;
				$building=(int)$building;
				$query="select * from buildings where campusId = $campus and id = $building order by name";
			}

			$result = mysqli_query($this->connection->get(), $query);

			while($row = $result->fetch_assoc())
				$data_array[]=$row;
			
			return $data_array;
		}

		public function showFloor($building, $floor){
			if($floor=="all"){
				$building=(int)$building;
				$query="select * from floors where buildingId = $building order by name";
			}else{
				$building=(int)$building;
				$floor=(int)$floor;
				$query="select * from floors where buildingId = $building and name =$floor order by name";
			}
			
			$result = mysqli_query($this->connection->get(), $query);

			while($row = $result->fetch_assoc())
				$data_array[]=$row;
			
			return $data_array;
		}

		public function showPercentage($campus, $building, $floor){

				$campus=(int)$campus;
				$query="SELECT percentage FROM cached_data
						WHERE  
                          campus_id     = {$campus}    AND 
                          building_id   = {$building}  AND
                          floor_id      = {$floor}     
						 
						";
			

			$result = mysqli_query($this->connection->get(), $query);

			if ($result->num_rows === 0) {
				return false;
			}
			while($row = $result->fetch_assoc())
				$data_array[]=$row;
			
			return $data_array;
		}
	}