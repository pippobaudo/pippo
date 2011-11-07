<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Retailergroups Test cases generated on: 2011-09-22 12:08:21 : 1316686101*/
App::import('Controller', 'Retailergroups');

class TestRetailergroupsController extends RetailergroupsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RetailergroupsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.retailergroup');

	function startTest() {
		$this->Retailergroups =& new TestRetailergroupsController();
		$this->Retailergroups->constructClasses();
	}

	function endTest() {
		unset($this->Retailergroups);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
