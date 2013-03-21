<?php
App::uses('AppController', 'Controller');
/**
 * RipSettings Controller
 *
 * @property RipSetting $RipSetting
 */
class RipSettingsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RipSetting->recursive = 4;
		$ripSettings = $this->paginate();
		$this->set('ripSettings', $ripSettings);
		$this->set('_serialize', 'ripSettings');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RipSetting->id = $id;
		if (!$this->RipSetting->exists()) {
			throw new NotFoundException(__('Invalid rip setting'));
		}
		$this->RipSetting->recursive = 4;
		$this->set('ripSetting', $this->RipSetting->read(null, $id));
		$this->set('_serialize', 'ripSetting');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RipSetting->create();
			if ($this->RipSetting->saveMany($this->request->data)) {
				$this->Session->setFlash(__('The rip setting has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rip setting could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		$settingLogs = $this->RipSetting->SettingLog->find('list');
		$this->set(compact('settingLogs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RipSetting->id = $id;
		if (!$this->RipSetting->exists()) {
			throw new NotFoundException(__('Invalid rip setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RipSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The rip setting has been saved'), 'default', null, 'success');
				$this->redirect(array('controller' => 'setting_logs', 'action' => 'view', $this->request->data['RipSetting']['setting_log_id']));
			} else {
				$this->Session->setFlash(__('The rip setting could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->RipSetting->recursive = 4;
			$this->request->data = $this->RipSetting->read(null, $id);
		}
		$settingLogs = $this->RipSetting->SettingLog->find('list');
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
		$this->RipSetting->id = $id;
		if (!$this->RipSetting->exists()) {
			throw new NotFoundException(__('Invalid rip setting'));
		}
		if ($this->RipSetting->delete()) {
			if ($this->request->isAjax()) {
				$result['result'] = 'success';
				$result['id'] = $id;
				
				$this->set('result', $result);
				$this->set('_serialize', 'result');
			}
			else {
				$this->Session->setFlash(__('Rip setting deleted'), 'default', null, 'success');
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
		$this->Session->setFlash(__('Rip setting was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
			}
		}
	}

}
