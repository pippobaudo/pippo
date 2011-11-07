<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/test.ctp on line 22
/* Pricerange Test cases generated on: 2011-09-22 11:58:56 : 1316685536*/
App::import('Model', 'Pricerange');

class PricerangeTestCase extends CakeTestCase {
	var $fixtures = array('app.pricerange', 'app.purchasinggap');

	function startTest() {
		$this->Pricerange =& ClassRegistry::init('Pricerange');
	}

	function endTest() {
		unset($this->Pricerange);
		ClassRegistry::flush();
	}

}
