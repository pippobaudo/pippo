<?php
/* Discount Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/fixture.ctp on line 24
2011-09-22 11:57:33 : 1316685453 */
class DiscountFixture extends CakeTestFixture {
	var $name = 'Discount';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'quorum_min' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'quorum_max' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'revenue' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'quorum_min' => 1,
			'quorum_max' => 1,
			'revenue' => 1
		),
	);
}
