<?php

	class Analyze{
		protected $connection;

		function __construct($connection){
			$this->connection=$connection;
		}

		public function getData($campus_id, $building_id, $floor_id){


            //SELECT foo from bar WHERE HOUR(your_time_field) = HOUR(CURTIME()) AND DATE(field) = CURDATE() 

			$query = " SELECT data FROM data 
                       WHERE  
                          campus_id     = {$campus_id}    AND 
                          building_id   = {$building_id}  AND
                          floor_id      = {$floor_id}     AND
                          HOUR(time)    = HOUR(CURTIME())
					 ";
			
			return mysqli_query($this->connection->get(), $query);
        }
        
        public function calculateAverage($data) {


        }
        
        

	}