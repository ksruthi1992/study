<?php

use PHPUnit\Framework\TestCase;


/**
 * @covers analyze
 */

Class analyzeTest extends TestCase{

	function testGetData(){

		$this->assertEquals("",analyze::getData());
	}

	function testCalculateAverage(){

		$this->assertEquals("",analyze::calculateAverage());
	}

	function testCheckCache(){

		$this->assertEquals("",analyze::checkCache());
	}
}