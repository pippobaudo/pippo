<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Retailer Test cases generated on: 2011-09-22 12:03:33 : 1316685813*/
App::import('Model', 'Retailer');

class RetailerTestCase extends CakeTestCase {
	var $fixtures = array('app.retailer', 'app.carrier', 'app.referring', 'app.image', 'app.deal', 'app.subcategory', 'app.user', 'app.users_deal', 'app.deals_retailer', 'app.feedback', 'app.proposal', 'app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.revenue');

	function startTest() {
		$this->Retailer =& ClassRegistry::init('Retailer');
	}

	function endTest() {
		unset($this->Retailer);
		ClassRegistry::flush();
	}

}
