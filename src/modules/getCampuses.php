<?php

	class getCampuses{
		protected $connection;
		protected $query;

		function __construct($connection){
			$this->connection=$connection;
		}

		public function get($campus){
			if($campus=="all")
				$this->query="select * from campuses order by name";
			else{
				$campus=(int)$campus;
				$this->query="select $campus from campuses order by name";
			}

			$result = mysqli_query($this->connection->get(), $this->query);

			while($row = $result->fetch_assoc())
				$campus_data[]=$row;
			
			return $campus_data;
		}
		
	}

	$allCampuses = new getCampuses($connection,"all");

	$campuses=$allCampuses->get("all");
