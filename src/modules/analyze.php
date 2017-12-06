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
			
            $result =  mysqli_query($this->connection->get(), $query);

            while($row = $result->fetch_assoc())
                $data_array[]=$row;

            return $data_array;
        }
        
        public function calculateAverage($campus_id, $building_id, $floor_id, $data) {

            if (!$data) 
                return null;

            $count = 0;
            $total = 0;
            foreach ($data as $value_array){
                
                        foreach($value_array as $value)
                            $count++;
                            $total += $value;
                        
                    }
            $calculated_value = (($total) / ($count * 3));

            $query = " INSERT INTO cached_data
                       (campus_id, building_id, floor_id, percentage)
                       VALUES
                       ({$campus_id}, {$building_id}, {$floor_id}, {$calculated_value})

                     ";

            mysqli_query($this->connection->get(), $query);

        }
        
        

	}