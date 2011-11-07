<?php
class Purchasinggap extends AppModel {
	var $name = 'Purchasinggap';
	var $validate = array(
		'quorum_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pricerange_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'revenue_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Quorum' => array(
			'className' => 'Quorum',
			'foreignKey' => 'quorum_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pricerange' => array(
			'className' => 'Pricerange',
			'foreignKey' => 'pricerange_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Revenue' => array(
			'className' => 'Revenue',
			'foreignKey' => 'revenue_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Proposal' => array(
			'className' => 'Proposal',
			'foreignKey' => 'purchasinggap_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
