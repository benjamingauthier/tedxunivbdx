<?php
App::uses('AppModel', 'Model');
/**
 * SpeakersHasTalk Model
 *
 * @property Speakers $Speakers
 * @property Talks $Talks
 */
class SpeakersHasTalk extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'speakers_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'talks_id' => array(
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

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Speakers' => array(
			'className' => 'Speakers',
			'foreignKey' => 'speakers_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Talks' => array(
			'className' => 'Talks',
			'foreignKey' => 'talks_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
