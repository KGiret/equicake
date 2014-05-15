<?php
App::uses('AppController', 'Controller');
/**
 * Tiers Controller
 *
 * @property Tier $Tier
 * @property PaginatorComponent $Paginator
 */
class TiersController extends AppController {

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
		$this->Tier->recursive = 0;
		$this->set('tiers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tier->exists($id)) {
			throw new NotFoundException(__('Invalid tier'));
		}
		$options = array('conditions' => array('Tier.' . $this->Tier->primaryKey => $id));
		$this->set('tier', $this->Tier->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tier->create();
			if ($this->Tier->save($this->request->data)) {
				$this->Session->setFlash(__('The tier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tier could not be saved. Please, try again.'));
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
		if (!$this->Tier->exists($id)) {
			throw new NotFoundException(__('Invalid tier'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tier->save($this->request->data)) {
				$this->Session->setFlash(__('The tier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tier could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tier.' . $this->Tier->primaryKey => $id));
			$this->request->data = $this->Tier->find('first', $options);
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
		$this->Tier->id = $id;
		if (!$this->Tier->exists()) {
			throw new NotFoundException(__('Invalid tier'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tier->delete()) {
			$this->Session->setFlash(__('The tier has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tier could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Tier->recursive = 0;
		$this->set('tiers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Tier->exists($id)) {
			throw new NotFoundException(__('Invalid tier'));
		}
		$options = array('conditions' => array('Tier.' . $this->Tier->primaryKey => $id));
		$this->set('tier', $this->Tier->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tier->create();
			if ($this->Tier->save($this->request->data)) {
				$this->Session->setFlash(__('The tier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tier could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Tier->exists($id)) {
			throw new NotFoundException(__('Invalid tier'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tier->save($this->request->data)) {
				$this->Session->setFlash(__('The tier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tier could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tier.' . $this->Tier->primaryKey => $id));
			$this->request->data = $this->Tier->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Tier->id = $id;
		if (!$this->Tier->exists()) {
			throw new NotFoundException(__('Invalid tier'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tier->delete()) {
			$this->Session->setFlash(__('The tier has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tier could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
