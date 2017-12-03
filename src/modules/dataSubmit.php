<?php

	class dataSubmit{
		protected $connection;

		function __construct($connection){
			$this->connection=$connection;
		}

		public function insertDataEntry($campus_id, $building_id, $floor_id, $data){

			$campus_id     = 1;
			$building_id   = 1;
			$floor_id      = 1;
			$data          = 1;
			
			$query = " INSERT INTO data 
					   (campus_id, building_id, floor_id, data)
					   VALUES
					   ({$campus_id}, {$building_id}, {$floor_id}, {$data})
					 ";
			
			mysqli_query($this->connection->get(), $query);
        }
        
		

	}