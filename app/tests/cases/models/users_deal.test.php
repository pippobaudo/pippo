<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* UsersDeal Test cases generated on: 2011-09-22 12:05:24 : 1316685924*/
App::import('Model', 'UsersDeal');

class UsersDealTestCase extends CakeTestCase {
	var $fixtures = array('app.users_deal', 'app.user', 'app.usergroup', 'app.deal', 'app.image', 'app.referring', 'app.retailer', 'app.carrier', 'app.deals_retailer', 'app.feedback', 'app.proposal', 'app.purchasinggap', 'app.quorum', 'app.pricerange', 'app.revenue', 'app.subcategory', 'app.category');

	function startTest() {
		$this->UsersDeal =& ClassRegistry::init('UsersDeal');
	}

	function endTest() {
		unset($this->UsersDeal);
		ClassRegistry::flush();
	}

}
