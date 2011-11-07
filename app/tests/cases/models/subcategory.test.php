<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Subcategory Test cases generated on: 2011-09-22 12:04:45 : 1316685885*/
App::import('Model', 'Subcategory');

class SubcategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.subcategory', 'app.category', 'app.deal', 'app.image', 'app.referring', 'app.retailer', 'app.carrier', 'app.deals_retailer', 'app.feedback', 'app.user', 'app.proposal', 'app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.revenue', 'app.users_deal');

	function startTest() {
		$this->Subcategory =& ClassRegistry::init('Subcategory');
	}

	function endTest() {
		unset($this->Subcategory);
		ClassRegistry::flush();
	}

}
