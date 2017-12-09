<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;



/**
 * @covers analyze
 */

Class analyzeTest extends TestCase{

	protected $connection;

		function __construct($connection){
			$this->connection=$connection;
		}

	function testCalculateAverage(){

		$this->assertEquals("",analyze::calculateAverage());
	}

	use TestCaseTrait;

	function testGetData(){

		$this->assertEquals("",analyze::getData());
	}

	function testCheckCache(){

		$this->assertEquals("",analyze::checkCache());
	}
}