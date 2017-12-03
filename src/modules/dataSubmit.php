<?php

	class dataSubmit{
		protected $connection;

		function __construct($connection){
			$this->connection=$connection;
		}

		public function insertDataEntry($campus_id, $building_id, $floor_id, $data){


			$query = " INSERT INTO data 
					   (campus_id, building_id, floor_id, data)
					   VALUES
					   ({$campus_id}, {$building_id}, {$floor_id}, {$data})
					 ";
			
			mysqli_query($this->connection->get(), $query);
        }
        
		

	}