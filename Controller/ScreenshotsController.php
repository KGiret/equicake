<?php
App::uses('AppController', 'Controller');
/**
 * Screenshots Controller
 *
 * @property Screenshot $Screenshot
 * @property PaginatorComponent $Paginator
 */
class ScreenshotsController extends AppController {

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
		$this->Screenshot->recursive = 0;
		$this->set('screenshots', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Screenshot->exists($id)) {
			throw new NotFoundException(__('Invalid screenshot'));
		}
		$options = array('conditions' => array('Screenshot.' . $this->Screenshot->primaryKey => $id));
		$this->set('screenshot', $this->Screenshot->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Screenshot->create();
			if ($this->Screenshot->save($this->request->data)) {
				$this->Session->setFlash(__('The screenshot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The screenshot could not be saved. Please, try again.'));
			}
		}
		$tiers = $this->Screenshot->Tier->find('list');
		$this->set(compact('tiers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Screenshot->exists($id)) {
			throw new NotFoundException(__('Invalid screenshot'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Screenshot->save($this->request->data)) {
				$this->Session->setFlash(__('The screenshot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The screenshot could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Screenshot.' . $this->Screenshot->primaryKey => $id));
			$this->request->data = $this->Screenshot->find('first', $options);
		}
		$tiers = $this->Screenshot->Tier->find('list');
		$this->set(compact('tiers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Screenshot->id = $id;
		if (!$this->Screenshot->exists()) {
			throw new NotFoundException(__('Invalid screenshot'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Screenshot->delete()) {
			$this->Session->setFlash(__('The screenshot has been deleted.'));
		} else {
			$this->Session->setFlash(__('The screenshot could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function media() {
		$this->loadModel('Tier');
		$tiers = $this->Tier->getAll();

		if (empty($_GET['idtier'])){
			$last_tier = $tiers['0']['Tier']['id'];

			$screenshots = $this->Screenshot->find('all', array(
				'fields' => array(
					'Screenshot.id',
					'Screenshot.name'
				),
				'order' => 'Screenshot.id DESC', 
				'contain' => array(
					'Tier.id',
					'Tier.number',
					'Tier.name'					
				),
				'conditions' => array('Tier.id =' => $last_tier)
			));
		} else{
			if (!$this->Tier->exists($_GET['idtier'])) { 
				throw new NotFoundException(__('Le tier demandé n\'existe pas')); 
			}
			$screenshots = $this->Screenshot->find('all', array(
				'fields' => array(
					'Screenshot.id',
					'Screenshot.name'
				),
				'order' => 'Screenshot.id DESC', 
				'contain' => array(
					'Tier.id',
					'Tier.number'					
				),
				'conditions' => array('Tier.id =' => $_GET['idtier'])
			));
			
	}
	$this->set(compact('screenshots'));
	$this->set(compact('tiers'));
}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Screenshot->recursive = 0;
		$this->set('screenshots', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Screenshot->exists($id)) {
			throw new NotFoundException(__('Invalid screenshot'));
		}
		$options = array('conditions' => array('Screenshot.' . $this->Screenshot->primaryKey => $id));
		$this->set('screenshot', $this->Screenshot->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Screenshot->create();
			if ($this->Screenshot->save($this->request->data)) {
				$this->Session->setFlash(__('The screenshot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The screenshot could not be saved. Please, try again.'));
			}
		}
		$tiers = $this->Screenshot->Tier->find('list');
		$this->set(compact('tiers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Screenshot->exists($id)) {
			throw new NotFoundException(__('Invalid screenshot'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Screenshot->save($this->request->data)) {
				$this->Session->setFlash(__('The screenshot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The screenshot could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Screenshot.' . $this->Screenshot->primaryKey => $id));
			$this->request->data = $this->Screenshot->find('first', $options);
		}
		$tiers = $this->Screenshot->Tier->find('list');
		$this->set(compact('tiers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Screenshot->id = $id;
		if (!$this->Screenshot->exists()) {
			throw new NotFoundException(__('Invalid screenshot'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Screenshot->delete()) {
			$this->Session->setFlash(__('The screenshot has been deleted.'));
		} else {
			$this->Session->setFlash(__('The screenshot could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
