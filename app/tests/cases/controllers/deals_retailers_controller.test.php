<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* DealsRetailers Test cases generated on: 2011-09-22 12:06:57 : 1316686017*/
App::import('Controller', 'DealsRetailers');

class TestDealsRetailersController extends DealsRetailersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DealsRetailersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.deals_retailer', 'app.deal', 'app.image', 'app.referring', 'app.retailer', 'app.carrier', 'app.feedback', 'app.user', 'app.usergroup', 'app.users_deal', 'app.proposal', 'app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.revenue', 'app.subcategory', 'app.category');

	function startTest() {
		$this->DealsRetailers =& new TestDealsRetailersController();
		$this->DealsRetailers->constructClasses();
	}

	function endTest() {
		unset($this->DealsRetailers);
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
