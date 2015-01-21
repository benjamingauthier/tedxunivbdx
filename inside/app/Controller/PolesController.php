<?php
App::uses('AppController', 'Controller');
/**
 * Poles Controller
 *
 * @property Pole $Pole
 * @property PaginatorComponent $Paginator
 */
class PolesController extends AppController {

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
		$this->Pole->recursive = 0;
		$this->set('poles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pole->exists($id)) {
			throw new NotFoundException(__('Invalid pole'));
		}
		$options = array('conditions' => array('Pole.' . $this->Pole->primaryKey => $id));
		$this->set('pole', $this->Pole->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pole->create();
			if ($this->Pole->save($this->request->data)) {
				$this->Session->setFlash(__('The pole has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pole could not be saved. Please, try again.'));
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
		if (!$this->Pole->exists($id)) {
			throw new NotFoundException(__('Invalid pole'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pole->save($this->request->data)) {
				$this->Session->setFlash(__('The pole has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pole could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pole.' . $this->Pole->primaryKey => $id));
			$this->request->data = $this->Pole->find('first', $options);
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
		$this->Pole->id = $id;
		if (!$this->Pole->exists()) {
			throw new NotFoundException(__('Invalid pole'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pole->delete()) {
			$this->Session->setFlash(__('The pole has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pole could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
