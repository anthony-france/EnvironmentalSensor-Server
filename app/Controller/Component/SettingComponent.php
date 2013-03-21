<?php

class SettingComponent extends Component {
	
	public function startup(&$controller) {
		$default_settings = array('hide_id_column' => "show");
		
		$controller->loadModel('ViewOption');
		$model_settings = $controller->ViewOption->find('first', array('conditions'=>array('model'=>$controller->name)));
		
		
		if (empty($model_settings)) {
			$model_settings = array();
		}
		else {
			$model_settings = $model_settings["ViewOption"];
		}
					
		$settings = array_merge($default_settings, $model_settings);
		
		//debug($settings);
		
		$controller->set('settings', $settings); 
	}
	
}

?>