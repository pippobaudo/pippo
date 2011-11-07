<?php
/* Retailer Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Applications/MAMP/htdocs/groupin/cake/console/templates/default/classes/fixture.ctp on line 24
2011-09-22 12:03:33 : 1316685813 */
class RetailerFixture extends CakeTestFixture {
	var $name = 'Retailer';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'company_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'owner' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'website' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'vat' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'zipcode' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'phone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fax' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'company_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'registration_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'deals_ok' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'deals_ko' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'feedback_ok_counter' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'carrier_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'referring_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'company_name' => 'Lorem ipsum dolor sit amet',
			'owner' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'website' => 'Lorem ipsum dolor sit amet',
			'vat' => 1,
			'address' => 'Lorem ipsum dolor sit amet',
			'zipcode' => 1,
			'phone' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor sit amet',
			'company_type' => 'Lorem ip',
			'registration_date' => '2011-09-22 12:03:33',
			'deals_ok' => 1,
			'deals_ko' => 1,
			'feedback_ok_counter' => 1,
			'carrier_id' => 1,
			'referring_id' => 1
		),
	);
}
