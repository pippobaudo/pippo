<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Purchasinggap Test cases generated on: 2011-09-22 12:01:47 : 1316685707*/
App::import('Model', 'Purchasinggap');

class PurchasinggapTestCase extends CakeTestCase {
	var $fixtures = array('app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.revenue', 'app.proposal', 'app.retailer', 'app.deal', 'app.image', 'app.referring', 'app.subcategory', 'app.user', 'app.users_deal', 'app.deals_retailer', 'app.feedback');

	function startTest() {
		$this->Purchasinggap =& ClassRegistry::init('Purchasinggap');
	}

	function endTest() {
		unset($this->Purchasinggap);
		ClassRegistry::flush();
	}

}
