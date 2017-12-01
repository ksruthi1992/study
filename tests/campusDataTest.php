<?php

use PHPUnit\Framework\TestCase;


/**
 * @covers campusData
 */

Class campusDataTest extends TestCase{

	public function showCampusTest(){
		$this->assertEquals(showCampus("all"), "");
	}

	public function showBuildingTest(){
		$this->assertEquals(showBuilding("all"), "");
	}

	public function showFloorTest(){
		$this->assertEquals(showFloor("all"), '');
	}
}