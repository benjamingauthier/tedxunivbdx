<?php
App::uses('AppController', 'Controller');
/**
 * Subscribers Controller
 *
 * @property Subscriber $Subscriber
 * @property PaginatorComponent $Paginator
 */
class SubscribersController extends AppController {

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
		$this->Subscriber->recursive = 0;
		$this->set('subscribers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subscriber->exists($id)) {
			throw new NotFoundException(__('Invalid subscriber'));
		}
		$options = array('conditions' => array('Subscriber.' . $this->Subscriber->primaryKey => $id));
		$this->set('subscriber', $this->Subscriber->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subscriber->create();
			if ($this->Subscriber->save($this->request->data)) {
				$this->Session->setFlash(__('The subscriber has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscriber could not be saved. Please, try again.'));
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
		if (!$this->Subscriber->exists($id)) {
			throw new NotFoundException(__('Invalid subscriber'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subscriber->save($this->request->data)) {
				$this->Session->setFlash(__('The subscriber has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscriber could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subscriber.' . $this->Subscriber->primaryKey => $id));
			$this->request->data = $this->Subscriber->find('first', $options);
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
		$this->Subscriber->id = $id;
		if (!$this->Subscriber->exists()) {
			throw new NotFoundException(__('Invalid subscriber'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subscriber->delete()) {
			$this->Session->setFlash(__('The subscriber has been deleted.'));
		} else {
			$this->Session->setFlash(__('The subscriber could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
