<?php
App::uses('AppModel', 'Model');
/**
 * SettingLog Model
 *
 * @property OutputSetting $OutputSetting
 * @property RipSetting $RipSetting
 * @property Client $Client
 * @property Comment $Comment
 */
class SettingLog extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'job_no';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'order_no' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_no' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'client_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),		
		'start_time' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),		
		'client_id' => array(
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
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'OutputSetting' => array(
			'className' => 'OutputSetting',
			'foreignKey' => 'setting_log_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RipSetting' => array(
			'className' => 'RipSetting',
			'foreignKey' => 'setting_log_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'setting_log_id',
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

	function beforeValidate() {
		if ($this->data["SettingLog"]["client_id_insert"] && $this->data["SettingLog"]["client_id"] == null) {
			
			$client = $this->Client->findByName($this->data["SettingLog"]["client_id_insert"]);
			
			if (empty($client)) {
				$this->Client->create();
				if ($this->Client->save(array('Client' => array( "name" => $this->data["SettingLog"]["client_id_insert"])))) {
					$this->data["SettingLog"]["client_id"] = $this->Client->getInsertID();
					return true;
				}
				else {
					return false;
				}
			}
			else {
				$this->data["SettingLog"]["client_id"] = $client["Client"]["id"];
			}
		}
	}
	
	
	function afterSave($created) {
		if ($created) {
			$iid = $this->getInsertID();	
			$data = array(
				'OutputSetting' => array('setting_log_id' => $iid, "tj8300_double_strike" => 0, "tj8300_rotate" => 0, "tj8300_mirror" => 0, ),
				'RipSetting' => array('setting_log_id' => $iid),
				'Comment' => array('setting_log_id' => $iid, 'text' => "Created records.")
			);
			$this->OutputSetting->save($data);
			$this->RipSetting->save($data);
			$this->Comment->save($data);
		}
		
	}
}
