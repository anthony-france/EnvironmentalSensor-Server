<?php
App::uses('AppController', 'Controller');
/**
 * OutputSettings Controller
 *
 * @property OutputSetting $OutputSetting
 */
class OutputSettingsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OutputSetting->recursive = 4;
		$outputSettings = $this->paginate();
		$this->set('outputSettings', $outputSettings);
		$this->set('_serialize', 'outputSettings');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->OutputSetting->id = $id;
		if (!$this->OutputSetting->exists()) {
			throw new NotFoundException(__('Invalid output setting'));
		}
		$this->OutputSetting->recursive = 4;
		$this->set('outputSetting', $this->OutputSetting->read(null, $id));
		$this->set('_serialize', 'outputSetting');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {
			$this->OutputSetting->create();
			if ($this->OutputSetting->saveMany($this->request->data)) {
				$this->Session->setFlash(__('The output setting has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The output setting could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		$settingLogs = $this->OutputSetting->SettingLog->find('list');
		$this->set(compact('settingLogs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->OutputSetting->id = $id;
		
		if (!$this->OutputSetting->exists()) {
			throw new NotFoundException(__('Invalid output setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OutputSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The output setting has been saved'), 'default', null, 'success');
				$this->redirect(array('controller' => 'setting_logs', 'action' => 'view', $this->request->data['OutputSetting']['setting_log_id']));
			} else {
				$this->Session->setFlash(__('The output setting could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->OutputSetting->recursive = 4;
			$this->request->data = $this->OutputSetting->read(null, $id);
		}
		$settingLogs = $this->OutputSetting->SettingLog->find('list');
		$this->set(compact('settingLogs'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->OutputSetting->id = $id;
		if (!$this->OutputSetting->exists()) {
			throw new NotFoundException(__('Invalid output setting'));
		}
		if ($this->OutputSetting->delete()) {
			if ($this->request->isAjax()) {
				$result['result'] = 'success';
				$result['id'] = $id;
				
				$this->set('result', $result);
				$this->set('_serialize', 'result');
			}
			else {
				$this->Session->setFlash(__('Output setting deleted'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			}
		}
		else {
			if ($this->request->isAjax()) {
				$result['result'] = 'success';
				$result['id'] = $id;
				
				$this->set('result', $result);
				$this->set('_serialize', 'result');
			}
			else {
		$this->Session->setFlash(__('Output setting was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
			}
		}
	}

}
