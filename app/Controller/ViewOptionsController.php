<?php
App::uses('AppController', 'Controller');
/**
 * ViewOptions Controller
 *
 * @property ViewOption $ViewOption
 */
class ViewOptionsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ViewOption->recursive = 4;
		$viewOptions = $this->paginate();
		$this->set('viewOptions', $viewOptions);
		$this->set('_serialize', 'viewOptions');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ViewOption->id = $id;
		if (!$this->ViewOption->exists()) {
			throw new NotFoundException(__('Invalid view option'));
		}
		$this->ViewOption->recursive = 4;
		$this->set('viewOption', $this->ViewOption->read(null, $id));
		$this->set('_serialize', 'viewOption');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ViewOption->create();
			if ($this->ViewOption->saveMany($this->request->data)) {
				$this->Session->setFlash(__('The view option has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The view option could not be saved. Please, try again.'), 'default', null, 'error');
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
		$this->ViewOption->id = $id;
		if (!$this->ViewOption->exists()) {
			throw new NotFoundException(__('Invalid view option'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ViewOption->save($this->request->data)) {
				$this->Session->setFlash(__('The view option has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The view option could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->ViewOption->recursive = 4;
			$this->request->data = $this->ViewOption->read(null, $id);
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
		$this->ViewOption->id = $id;
		if (!$this->ViewOption->exists()) {
			throw new NotFoundException(__('Invalid view option'));
		}
		if ($this->ViewOption->delete()) {
			if ($this->request->isAjax()) {
				$result['result'] = 'success';
				$result['id'] = $id;
				
				$this->set('result', $result);
				$this->set('_serialize', 'result');
			}
			else {
				$this->Session->setFlash(__('View option deleted'), 'default', null, 'success');
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
		$this->Session->setFlash(__('View option was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
			}
		}
	}

}
