<?php
/* Deal Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/fixture.ctp on line 24
2011-09-22 11:56:49 : 1316685409 */
class DealFixture extends CakeTestFixture {
	var $name = 'Deal';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'subtitle' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'start_price' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '10,2'),
		'end_price' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '10,2'),
		'start_discount' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'end_discount' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'start_datetime' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'end_datetime' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'users_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'retailers_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'users_observer_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'image_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'subcategory_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'retailer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor ',
			'subtitle' => 'Lorem ipsum dolor sit amet',
			'start_price' => 1,
			'end_price' => 1,
			'start_discount' => 1,
			'end_discount' => 1,
			'start_datetime' => '2011-09-22 11:56:49',
			'end_datetime' => '2011-09-22 11:56:49',
			'users_count' => 1,
			'retailers_count' => 1,
			'users_observer_count' => 1,
			'image_id' => 1,
			'subcategory_id' => 1,
			'user_id' => 1,
			'retailer_id' => 1
		),
	);
}
