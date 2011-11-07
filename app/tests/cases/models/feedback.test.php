<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Feedback Test cases generated on: 2011-09-22 11:58:07 : 1316685487*/
App::import('Model', 'Feedback');

class FeedbackTestCase extends CakeTestCase {
	var $fixtures = array('app.feedback', 'app.deal', 'app.image', 'app.subcategory', 'app.user', 'app.users_deal', 'app.retailer', 'app.deals_retailer', 'app.proposal');

	function startTest() {
		$this->Feedback =& ClassRegistry::init('Feedback');
	}

	function endTest() {
		unset($this->Feedback);
		ClassRegistry::flush();
	}

}
