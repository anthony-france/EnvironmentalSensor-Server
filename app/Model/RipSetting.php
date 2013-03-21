<?php
App::uses('AppModel', 'Model');
/**
 * RipSetting Model
 *
 * @property SettingLog $SettingLog
 */
class RipSetting extends AppModel {

    public $actsAs = array(
        'Upload.Upload' => array(
            'corrections_file' => array(
                'fields' => array(
                    'dir' => 'corrections_file_dir'
                )
            ),
			'curve_file' => array(
                'fields' => array(
                    'dir' => 'curve_file_dir'
                )
            )
        )
    );

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
	
	function afterSave($created) {
		$comment["Comment"]["setting_log_id"] = $this->data['RipSetting']['setting_log_id'];
		if ($created) {
			$comment["Comment"]["text"] = "Rip settings created.";
		}		
		else {
			$comment["Comment"]["text"] = "Rip settings edited.";
		}			
		$this->SettingLog->Comment->save($comment);		
	}
}
