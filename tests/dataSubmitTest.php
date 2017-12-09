<?php

use PHPUnit\Framework\TestCase;


/**
 * @covers dataSubmit
 */

Class dataSubmitTest extends TestCase{

	function testInsertDataEntry{

		$this->assertEquals("", dataSubmit::insertDataEntry());
	}
}
