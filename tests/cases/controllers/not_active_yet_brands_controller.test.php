<?php 
/* SVN FILE: $Id$ */
/* BrandsController Test cases generated on: 2008-11-13 19:11:08 : 1226592608*/
App::import('Controller', 'Brands');

class TestBrands extends BrandsController {
	var $autoRender = false;
}

class BrandsControllerTest extends CakeTestCase {
	var $Brands = null;

	function setUp() {
		$this->Brands = new TestBrands();
		$this->Brands->constructClasses();
	}

	function testBrandsControllerInstance() {
		$this->assertTrue(is_a($this->Brands, 'BrandsController'));
	}

	function tearDown() {
		unset($this->Brands);
	}
}
?>