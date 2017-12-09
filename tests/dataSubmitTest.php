<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;


/**
 * @covers dataSubmit
 */

Class dataSubmitTest extends TestCase{

	protected $connection;

		function __construct($connection){
			$this->connection=$connection;
		}

	use TestCaseTrait;

	function testInsertDataEntry{

		
	}
}
