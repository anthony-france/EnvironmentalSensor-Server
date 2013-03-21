<?php
App::uses('AppController', 'Controller');
/**
 * EnvironmentalReadings Controller
 *
 * @property EnvironmentalReading $EnvironmentalReading
 */
class EnvironmentalReadingsController extends AppController {

 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EnvironmentalReading->recursive = 1;
			
		if (!empty($this->params['named']['start_time']) && !empty($this->params['named']['end_time'])) {

			if (strtotime($this->params['named']['start_time']) > strtotime($this->params['named']['end_time'])) {
				$start = $this->params['named']['end_time'];
				$end = $this->params['named']['start_time'];
				$dir = 'asc';
			}
			else {
				$start = $this->params['named']['start_time'];
				$end = $this->params['named']['end_time'];
				$dir = 'asc';
			}
			$this->paginate = array(
				'conditions' => array(
					'EnvironmentalReading.created BETWEEN ? AND ?' => array(
						$start, 
						$end
					)	
				),
				'limit' => 5000,
				'maxLimit' => 5000,
				'order' => array(
					'EnvironmentalReading.created'=>$dir
				)
			);
		}
		else {

		}
		
		$environmentalReadings = $this->paginate();
		if (!empty($environmentalReadings)) {
			if (strtotime($environmentalReadings[0]['EnvironmentalReading']['created']) > strtotime($environmentalReadings[count($environmentalReadings) - 1]['EnvironmentalReading']['created']))
				{
					$environmentalReadings = array_reverse($environmentalReadings);
				}
		}
		$this->set('environmentalReadings', $environmentalReadings);
		$this->set('_serialize', 'environmentalReadings');
		}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EnvironmentalReading->id = $id;
		if (!$this->EnvironmentalReading->exists()) {
			throw new NotFoundException(__('Invalid environmental reading'));
		}
		$this->EnvironmentalReading->recursive = 4;
		$this->set('environmentalReading', $this->EnvironmentalReading->read(null, $id));
		$this->set('_serialize', 'environmentalReading');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->log("EV Add Called.");
		if ($this->request->is('post')) {
			$this->EnvironmentalReading->create();
			$this->log($this->request->data["EnvironmentalReading"]["humidity"]);
			if ($this->EnvironmentalReading->save($this->request->data)) {
				$this->Session->setFlash(__('The environmental reading has been saved'), 'default', null, 'success');
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The environmental reading could not be saved. Please, try again.'), 'default', null, 'error');
			}
		}
		else {
			 $this->log("Not a post");
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EnvironmentalReading->id = $id;
		if (!$this->EnvironmentalReading->exists()) {
			throw new NotFoundException(__('Invalid environmental reading'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EnvironmentalReading->save($this->request->data)) {
				$this->Session->setFlash(__('The environmental reading has been saved'), 'default', null, 'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The environmental reading could not be saved. Please, try again.'), 'default', null, 'error');
			}
		} else {
			$this->EnvironmentalReading->recursive = 4;
			$this->request->data = $this->EnvironmentalReading->read(null, $id);
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
		$this->EnvironmentalReading->id = $id;
		if (!$this->EnvironmentalReading->exists()) {
			throw new NotFoundException(__('Invalid environmental reading'));
		}
		if ($this->EnvironmentalReading->delete()) {
			if ($this->request->isAjax()) {
				$result['result'] = 'success';
				$result['id'] = $id;
				
				$this->set('result', $result);
				$this->set('_serialize', 'result');
			}
			else {
				$this->Session->setFlash(__('Environmental reading deleted'), 'default', null, 'success');
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
		$this->Session->setFlash(__('Environmental reading was not deleted'), 'default', null, 'error');
		$this->redirect(array('action' => 'index'));
			}
		}
	}

}
