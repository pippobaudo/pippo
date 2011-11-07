<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Proposals Test cases generated on: 2011-09-22 12:07:40 : 1316686060*/
App::import('Controller', 'Proposals');

class TestProposalsController extends ProposalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProposalsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.proposal', 'app.retailer', 'app.carrier', 'app.referring', 'app.image', 'app.deal', 'app.subcategory', 'app.category', 'app.user', 'app.usergroup', 'app.users_deal', 'app.feedback', 'app.deals_retailer', 'app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.revenue');

	function startTest() {
		$this->Proposals =& new TestProposalsController();
		$this->Proposals->constructClasses();
	}

	function endTest() {
		unset($this->Proposals);
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
