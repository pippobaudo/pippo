<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Carriers Test cases generated on: 2011-09-22 12:05:40 : 1316685940*/
App::import('Controller', 'Carriers');

class TestCarriersController extends CarriersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CarriersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.carrier', 'app.retailer', 'app.referring', 'app.image', 'app.deal', 'app.subcategory', 'app.category', 'app.user', 'app.usergroup', 'app.users_deal', 'app.feedback', 'app.deals_retailer', 'app.proposal', 'app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.revenue');

	function startTest() {
		$this->Carriers =& new TestCarriersController();
		$this->Carriers->constructClasses();
	}

	function endTest() {
		unset($this->Carriers);
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
