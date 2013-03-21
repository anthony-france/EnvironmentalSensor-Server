<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 * @property SettingLog $SettingLog
 */
class Comment extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'setting_log_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'text' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'SettingLog' => array(
			'className' => 'SettingLog',
			'foreignKey' => 'setting_log_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
