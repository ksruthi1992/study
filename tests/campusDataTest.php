<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;


/**
 * @covers campusData
 */

Class campusDataTest extends TestCase{

	protected $connection;

		function __construct($connection){
			$this->connection=$connection;
		}

	use TestCaseTrait;

	public function testShowCampus(){
		$this->assertEquals(2, $this->getConnection()->getRowCount('campus'), "Pre-Condition");
		$this->assertEquals("",campusData::showCampus("all"));
	}

	public function testShowBuilding(){
		$this->assertEquals("",campusData::showBuilding(1,"all"));
	}

	public function testShowFloor(){
		$this->assertEquals("",campusData::showFloor(1,"all"));
	}
}

?>