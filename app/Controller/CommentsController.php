<?php
App::uses('AppController', 'Controller');
/**
 * Comments Controller
 *
 * @property Comment $Comment
 */
class CommentsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comment->recursive = 4;
		$render = null;
		
		if (!empty($this->params["named"]["setting_log_id"])) {
			$this->paginate = array( 'conditions' => array('Comment.setting_log_id =' => $this->params["named"]["setting_log_id"]));
			$render = "comment_list";
		}
		
		$comments = $this->paginate();
		$this->set('comments', $comments);
		$this->set('_serialize', 'comments');
		$this->render($render);
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$this->Comment->recursive = 1;
		$this->set('comment', $this->Comment->read(null, $id));
		$this->set('_serialize', 'comment');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if (!empty($this->params["named"]["setting_log_id"])) {
			$this->request->data["Comment"]["setting_log_id"] = $this->params["named"]["setting_log_id"];
		}
		
		if ($this->request->is('post')) {

			$this->Comment->create();
			if ($this->Comment->saveMany($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved'), 'default', null, 'success');
				if (!empty($this->request->data["Comment"]["setting_log_id"])) {
					$this->redirect(array('controller' => 'setting_logs', 'action' => 'view', $this->request->data["Comment"]["setting_log_id"]));
				}
				else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		$settingLogs = $this->Comment->SettingLog->find('list');
		$this->set(compact('settingLogs'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->Comment->recursive = 4;
			$this->request->data = $this->Comment->read(null, $id);
		}
		$settingLogs = $this->Comment->SettingLog->find('list');
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
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->Comment->delete()) {
			if ($this->request->isAjax()) {
				$result['result'] = 'success';
				$result['id'] = $id;
				
				$this->set('result', $result);
				$this->set('_serialize', 'result');
			}
			else {
				$this->Session->setFlash(__('Comment deleted'), 'default', null, 'success');
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
		$this->Session->setFlash(__('Comment was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
			}
		}
	}

}
