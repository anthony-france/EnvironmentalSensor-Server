<?php
App::uses('AppController', 'Controller');
/**
 * SettingLogs Controller
 *
 * @property SettingLog $SettingLog
 */
class SettingLogsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SettingLog->recursive = 1;
		$conditions = array();
			
		if (!empty($this->request->data["Search"])) {
		
			if (!empty($this->request->data["Search"]["order_no"])) {
				$conditions["order_no"] = $this->request->data["Search"]["order_no"];
			}
			
			if (!empty($this->request->data["Search"]["job_no"])) {
				$conditions["job_no"] = $this->request->data["Search"]["job_no"];
			}
			
			if (!empty($this->request->data["Search"]["client_id"])) {
				$conditions["client_id"] = $this->request->data["Search"]["client_id"];
			}
			
			if (!empty($this->request->data["Search"]["start_time"]) && !empty($this->request->data["Search"]["end_time"])) {
				$conditions["OR"]["start_time BETWEEN ? AND ?"] = array($this->request->data["Search"]["start_time"], $this->request->data["Search"]["end_time"]);
				$conditions["OR"]["end_time BETWEEN ? AND ?"] = array($this->request->data["Search"]["start_time"], $this->request->data["Search"]["end_time"]);
			}
		
		}
		
		$settingLogs = $this->paginate($conditions);	
	
		
		$this->set('settingLogs', $settingLogs);
		$this->set('clients', $this->SettingLog->Client->find('list'));
		$this->set('_serialize', 'settingLogs');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SettingLog->id = $id;
		if (!$this->SettingLog->exists()) {
			throw new NotFoundException(__('Invalid setting log'));
		}
		$this->SettingLog->recursive = 1;
		$this->set('settingLog', $this->SettingLog->read(null, $id));
		$this->set('_serialize', 'settingLog');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SettingLog->create();
			if ($this->SettingLog->save($this->request->data)) {
				$this->Session->setFlash(__('The setting log has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'view', $this->SettingLog->getInsertID())); 
			} else {
				$this->Session->setFlash(__('The setting log could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		$clients = $this->SettingLog->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SettingLog->id = $id;
		if (!$this->SettingLog->exists()) {
			throw new NotFoundException(__('Invalid setting log'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SettingLog->save($this->request->data)) {
				$this->Session->setFlash(__('The setting log has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'view', $this->SettingLog->id));
			} else {
				$this->Session->setFlash(__('The setting log could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->SettingLog->recursive = 4;
			$this->request->data = $this->SettingLog->read(null, $id);
		}
		$clients = $this->SettingLog->Client->find('list');
		$this->set(compact('clients'));
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
		$this->SettingLog->id = $id;
		if (!$this->SettingLog->exists()) {
			throw new NotFoundException(__('Invalid setting log'));
		}
		if ($this->SettingLog->delete()) {
			if ($this->request->isAjax()) {
				$result['result'] = 'success';
				$result['id'] = $id;
				
				$this->set('result', $result);
				$this->set('_serialize', 'result');
			}
			else {
				$this->Session->setFlash(__('Setting log deleted'), 'default', null, 'success');
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
		$this->Session->setFlash(__('Setting log was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
			}
		}
	}

}
