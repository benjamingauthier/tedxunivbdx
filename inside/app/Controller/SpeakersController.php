<?php
App::uses('AppController', 'Controller');
/**
 * Speakers Controller
 *
 * @property Speaker $Speaker
 * @property PaginatorComponent $Paginator
 */
class SpeakersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Speaker->recursive = 0;
		$this->set('speakers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Speaker->exists($id)) {
			throw new NotFoundException(__('Invalid speaker'));
		}
		$options = array('conditions' => array('Speaker.' . $this->Speaker->primaryKey => $id));
		$this->set('speaker', $this->Speaker->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Speaker->create();
			if ($this->Speaker->save($this->request->data)) {
				$this->Session->setFlash(__('The speaker has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The speaker could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Speaker->exists($id)) {
			throw new NotFoundException(__('Invalid speaker'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Speaker->save($this->request->data)) {
				$this->Session->setFlash(__('The speaker has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The speaker could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Speaker.' . $this->Speaker->primaryKey => $id));
			$this->request->data = $this->Speaker->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Speaker->id = $id;
		if (!$this->Speaker->exists()) {
			throw new NotFoundException(__('Invalid speaker'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Speaker->delete()) {
			$this->Session->setFlash(__('The speaker has been deleted.'));
		} else {
			$this->Session->setFlash(__('The speaker could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
