<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Quorum Test cases generated on: 2011-09-22 12:01:59 : 1316685719*/
App::import('Model', 'Quorum');

class QuorumTestCase extends CakeTestCase {
	var $fixtures = array('app.quorum', 'app.purchasinggap', 'app.pricerange', 'app.revenue', 'app.proposal', 'app.retailer', 'app.deal', 'app.image', 'app.referring', 'app.subcategory', 'app.user', 'app.users_deal', 'app.deals_retailer', 'app.feedback');

	function startTest() {
		$this->Quorum =& ClassRegistry::init('Quorum');
	}

	function endTest() {
		unset($this->Quorum);
		ClassRegistry::flush();
	}

}
