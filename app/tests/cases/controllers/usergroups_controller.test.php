<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Usergroups Test cases generated on: 2011-09-22 12:08:54 : 1316686134*/
App::import('Controller', 'Usergroups');

class TestUsergroupsController extends UsergroupsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsergroupsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.usergroup', 'app.user', 'app.deal', 'app.image', 'app.referring', 'app.retailer', 'app.carrier', 'app.deals_retailer', 'app.feedback', 'app.proposal', 'app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.revenue', 'app.subcategory', 'app.category', 'app.users_deal');

	function startTest() {
		$this->Usergroups =& new TestUsergroupsController();
		$this->Usergroups->constructClasses();
	}

	function endTest() {
		unset($this->Usergroups);
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
