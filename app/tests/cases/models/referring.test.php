<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Referring Test cases generated on: 2011-09-22 12:02:17 : 1316685737*/
App::import('Model', 'Referring');

class ReferringTestCase extends CakeTestCase {
	var $fixtures = array('app.referring', 'app.image', 'app.deal', 'app.subcategory', 'app.user', 'app.users_deal', 'app.retailer', 'app.deals_retailer', 'app.feedback', 'app.proposal', 'app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.revenue');

	function startTest() {
		$this->Referring =& ClassRegistry::init('Referring');
	}

	function endTest() {
		unset($this->Referring);
		ClassRegistry::flush();
	}

}
