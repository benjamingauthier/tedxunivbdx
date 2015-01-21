<?php
App::uses('AppController', 'Controller');
/**
 * SpeakersHasTalks Controller
 *
 * @property SpeakersHasTalk $SpeakersHasTalk
 * @property PaginatorComponent $Paginator
 */
class SpeakersHasTalksController extends AppController {

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
		$this->SpeakersHasTalk->recursive = 0;
		$this->set('speakersHasTalks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SpeakersHasTalk->exists($id)) {
			throw new NotFoundException(__('Invalid speakers has talk'));
		}
		$options = array('conditions' => array('SpeakersHasTalk.' . $this->SpeakersHasTalk->primaryKey => $id));
		$this->set('speakersHasTalk', $this->SpeakersHasTalk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SpeakersHasTalk->create();
			if ($this->SpeakersHasTalk->save($this->request->data)) {
				$this->Session->setFlash(__('The speakers has talk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The speakers has talk could not be saved. Please, try again.'));
			}
		}
		$speakers = $this->SpeakersHasTalk->Speaker->find('list');
		$talks = $this->SpeakersHasTalk->Talk->find('list');
		$this->set(compact('speakers', 'talks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SpeakersHasTalk->exists($id)) {
			throw new NotFoundException(__('Invalid speakers has talk'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SpeakersHasTalk->save($this->request->data)) {
				$this->Session->setFlash(__('The speakers has talk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The speakers has talk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SpeakersHasTalk.' . $this->SpeakersHasTalk->primaryKey => $id));
			$this->request->data = $this->SpeakersHasTalk->find('first', $options);
		}
		$speakers = $this->SpeakersHasTalk->Speaker->find('list');
		$talks = $this->SpeakersHasTalk->Talk->find('list');
		$this->set(compact('speakers', 'talks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SpeakersHasTalk->id = $id;
		if (!$this->SpeakersHasTalk->exists()) {
			throw new NotFoundException(__('Invalid speakers has talk'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SpeakersHasTalk->delete()) {
			$this->Session->setFlash(__('The speakers has talk has been deleted.'));
		} else {
			$this->Session->setFlash(__('The speakers has talk could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
