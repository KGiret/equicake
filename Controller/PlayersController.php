<?php
App::uses('AppController', 'Controller');
/**
 * Players Controller
 *
 * @property Player $Player
 * @property PaginatorComponent $Paginator
 */
class PlayersController extends AppController {

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

	public function roster() {
		$this->loadModel('Profession');
		$classes = $this->Profession->getAll();

		$this->loadModel('Speciality');
		$specialities = $this->Speciality->getAll();

		$tanks = $this->Player->getByRole('tank');
		$heals = $this->Player->getByRole('heal');
		$dpss = $this->Player->getByRole('dps');

		$this->set(compact('classes'));
		$this->set(compact('specialities'));
		$this->set(compact('tanks'));
		$this->set(compact('heals'));
		$this->set(compact('dpss'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Player->exists($id)) {
			throw new NotFoundException(__('Invalid player'));
		}
		$options = array('conditions' => array('Player.' . $this->Player->primaryKey => $id));
		$this->set('player', $this->Player->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Player->create();
			if ($this->Player->save($this->request->data)) {
				$this->Session->setFlash(__('The player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
			}
		}
		$professions = $this->Player->Profession->find('list');
		$specialities = $this->Player->Speciality->find('list');
		$roles = $this->Player->Role->find('list');
		$ranks = $this->Player->Rank->find('list');
		$this->set(compact('professions', 'specialities', 'roles', 'ranks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Player->exists($id)) {
			throw new NotFoundException(__('Invalid player'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Player->save($this->request->data)) {
				$this->Session->setFlash(__('The player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Player.' . $this->Player->primaryKey => $id));
			$this->request->data = $this->Player->find('first', $options);
		}
		$professions = $this->Player->Profession->find('list');
		$specialities = $this->Player->Speciality->find('list');
		$roles = $this->Player->Role->find('list');
		$ranks = $this->Player->Rank->find('list');
		$this->set(compact('professions', 'specialities', 'roles', 'ranks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Player->id = $id;
		if (!$this->Player->exists()) {
			throw new NotFoundException(__('Invalid player'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Player->delete()) {
			$this->Session->setFlash(__('The player has been deleted.'));
		} else {
			$this->Session->setFlash(__('The player could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Player->recursive = 0;
		$this->set('players', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Player->exists($id)) {
			throw new NotFoundException(__('Invalid player'));
		}
		$options = array('conditions' => array('Player.' . $this->Player->primaryKey => $id));
		$this->set('player', $this->Player->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Player->create();
			if ($this->Player->save($this->request->data)) {
				$this->Session->setFlash(__('The player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
			}
		}
		$professions = $this->Player->Profession->find('list');
		$specialities = $this->Player->Speciality->find('list');
		$roles = $this->Player->Role->find('list');
		$ranks = $this->Player->Rank->find('list');
		$this->set(compact('professions', 'specialities', 'roles', 'ranks'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Player->exists($id)) {
			throw new NotFoundException(__('Invalid player'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Player->save($this->request->data)) {
				$this->Session->setFlash(__('The player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Player.' . $this->Player->primaryKey => $id));
			$this->request->data = $this->Player->find('first', $options);
		}
		$professions = $this->Player->Profession->find('list');
		$specialities = $this->Player->Speciality->find('list');
		$roles = $this->Player->Role->find('list');
		$ranks = $this->Player->Rank->find('list');
		$this->set(compact('professions', 'specialities', 'roles', 'ranks'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Player->id = $id;
		if (!$this->Player->exists()) {
			throw new NotFoundException(__('Invalid player'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Player->delete()) {
			$this->Session->setFlash(__('The player has been deleted.'));
		} else {
			$this->Session->setFlash(__('The player could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
