<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 */
class ClientsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Client->recursive = 1;
		$clients = $this->paginate();
		$this->set('clients', $clients);
		$this->set('_serialize', 'clients');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		$this->Client->recursive = 1;
		$this->set('client', $this->Client->read(null, $id));
		$this->set('_serialize', 'client');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Client->create();
			if ($this->Client->saveMany($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Client->save($this->request->data)) {
				$this->Session->setFlash(__('The client has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('The client could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->Client->recursive = 1;
			$this->request->data = $this->Client->read(null, $id);
		}
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
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->Client->delete()) {
			if ($this->request->isAjax()) {
				$result['result'] = 'success';
				$result['id'] = $id;
				
				$this->set('result', $result);
				$this->set('_serialize', 'result');
			}
			else {
				$this->Session->setFlash(__('Client deleted'), 'default', null, 'success');
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
		$this->Session->setFlash(__('Client was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
			}
		}
	}

}
