<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Users Test cases generated on: 2011-09-22 12:09:00 : 1316686140*/
App::import('Controller', 'Users');

class TestUsersController extends UsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.usergroup', 'app.deal', 'app.image', 'app.referring', 'app.retailer', 'app.carrier', 'app.deals_retailer', 'app.feedback', 'app.proposal', 'app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.revenue', 'app.subcategory', 'app.category', 'app.users_deal');

	function startTest() {
		$this->Users =& new TestUsersController();
		$this->Users->constructClasses();
	}

	function endTest() {
		unset($this->Users);
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
