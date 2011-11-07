<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* DealsRetailer Test cases generated on: 2011-09-22 11:57:13 : 1316685433*/
App::import('Model', 'DealsRetailer');

class DealsRetailerTestCase extends CakeTestCase {
	var $fixtures = array('app.deals_retailer', 'app.deal', 'app.image', 'app.subcategory', 'app.user', 'app.users_deal', 'app.retailer', 'app.feedback', 'app.proposal');

	function startTest() {
		$this->DealsRetailer =& ClassRegistry::init('DealsRetailer');
	}

	function endTest() {
		unset($this->DealsRetailer);
		ClassRegistry::flush();
	}

}
