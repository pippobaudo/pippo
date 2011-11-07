<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Retailergroup Test cases generated on: 2011-09-22 12:02:36 : 1316685756*/
App::import('Model', 'Retailergroup');

class RetailergroupTestCase extends CakeTestCase {
	var $fixtures = array('app.retailergroup');

	function startTest() {
		$this->Retailergroup =& ClassRegistry::init('Retailergroup');
	}

	function endTest() {
		unset($this->Retailergroup);
		ClassRegistry::flush();
	}

}
