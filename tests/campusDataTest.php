<?php

use PHPUnit\Framework\TestCase;


/**
 * @covers campusData
 */

Class campusDataTest extends TestCase{

	public function testShowCampus(){

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