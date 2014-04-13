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
				return $this->flash(__('The screenshot has been saved.'), array('action' => 'index'));
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
				return $this->flash(__('The screenshot has been saved.'), array('action' => 'index'));
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
			return $this->flash(__('The screenshot has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The screenshot could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}}
