<?php
App::uses('AppController', 'Controller');
/**
 * Specialities Controller
 *
 * @property Speciality $Speciality
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SpecialitiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Speciality->recursive = 0;
		$this->set('specialities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Speciality->exists($id)) {
			throw new NotFoundException(__('Invalid speciality'));
		}
		$options = array('conditions' => array('Speciality.' . $this->Speciality->primaryKey => $id));
		$this->set('speciality', $this->Speciality->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Speciality->create();
			if ($this->Speciality->save($this->request->data)) {
				$this->Session->setFlash(__('The speciality has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The speciality could not be saved. Please, try again.'));
			}
		}
		$classes = $this->Speciality->Classe->find('list');
		$this->set(compact('classes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Speciality->exists($id)) {
			throw new NotFoundException(__('Invalid speciality'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Speciality->save($this->request->data)) {
				$this->Session->setFlash(__('The speciality has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The speciality could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Speciality.' . $this->Speciality->primaryKey => $id));
			$this->request->data = $this->Speciality->find('first', $options);
		}
		$classes = $this->Speciality->Classe->find('list');
		$this->set(compact('classes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Speciality->id = $id;
		if (!$this->Speciality->exists()) {
			throw new NotFoundException(__('Invalid speciality'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Speciality->delete()) {
			$this->Session->setFlash(__('The speciality has been deleted.'));
		} else {
			$this->Session->setFlash(__('The speciality could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
