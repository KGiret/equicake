<?php
App::uses('AppController', 'Controller');
/**
 * Articles Controller
 *
 * @property Article $Article
 * @property PaginatorComponent $Paginator
 */
class ArticlesController extends AppController {

	public function accueil() {
		$articles = $this->Article->find('all', array(
			'fields' => array(
				'Article.id',
				'Article.title',
				'Article.contents',
				'Article.date'
			),
			'order' => 'Article.id DESC', 
			'contain' => array(
				'Screenshot.name',
				'Video.link',
				'Tier.number'					
			),
			'conditions' => array('Tier.state =' => '1')
		));
		$videos = $this->Article->Video->find('all', array(
			'contain' => false,
			'fields' => array(
				'Video.id',
				'Video.link'
			),   
			'limit' => 2,
			'order' => 'Video.id DESC',  		
		));

		$this->loadModel('Profession');
		$classes = $this->Profession->getAll();

		$this->loadModel('Speciality');
		$specialities = $this->Speciality->getAll();

		$images = $this->Article->find('all', array(
			'contain' => array(
				'Screenshot.id',
				'Screenshot.name',
				'Tier.number'
			),
			'order' => 'Screenshot.id DESC',
			'limit' => 5
		));
//die(var_dump($images));
		$this->set(compact('articles'));
		$this->set(compact('videos'));
		$this->set(compact('classes'));
		$this->set(compact('specialities'));
		$this->set(compact('images'));
	}

	public function archives(){
		$tiers = $this->Article->Tier->find('all', array(
			'fields' => array(
				'Tier.name',
				'Tier.id',
				'Tier.number'
			),
			'contain' => false,
			'conditions' => array(
				'Tier.state =' => '0'
			),
			'order' => 'Tier.id DESC',
		));

		if (empty($_GET['idtier'])){
			$last_tier = $tiers['0']['Tier']['id'];

			$articles = $this->Article->find('all', array(
				'fields' => array(
					'Article.id',
					'Article.title',
					'Article.contents',
					'Article.date'
				),
				'order' => 'Article.id DESC', 
				'contain' => array(
					'Screenshot.name',
					'Video.link',
					'Tier.number'					
				),
				'conditions' => array('Tier.id =' => $last_tier)
			));
		} else{
			$articles = $this->Article->find('all', array(
				'fields' => array(
					'Article.id',
					'Article.title',
					'Article.contents',
					'Article.date'
				),
				'order' => 'Article.id DESC', 
				'contain' => array(
					'Screenshot.name',
					'Video.link',
					'Tier.number'					
				),
				'conditions' => array('Tier.id =' => $_GET['idtier'])
			));
		}
//die(var_dump($articles));
		$this->set(compact('tiers'));
		$this->set(compact('articles'));
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
		$this->set('article', $this->Article->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Article->create();
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		}
		$screenshots = $this->Article->Screenshot->find('list');
		$videos = $this->Article->Video->find('list');
		$tiers = $this->Article->Tier->find('list');
		$this->set(compact('screenshots', 'videos', 'tiers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
			$this->request->data = $this->Article->find('first', $options);
		}
		$screenshots = $this->Article->Screenshot->find('list');
		$videos = $this->Article->Video->find('list');
		$tiers = $this->Article->Tier->find('list');
		$this->set(compact('screenshots', 'videos', 'tiers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Article->delete()) {
			$this->Session->setFlash(__('The article has been deleted.'));
		} else {
			$this->Session->setFlash(__('The article could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Article->recursive = 0;
		$this->set('articles', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
		$this->set('article', $this->Article->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Article->create();
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		}
		$screenshots = $this->Article->Screenshot->find('list');
		$videos = $this->Article->Video->find('list');
		$tiers = $this->Article->Tier->find('list');
		$this->set(compact('screenshots', 'videos', 'tiers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
			$this->request->data = $this->Article->find('first', $options);
		}
		$screenshots = $this->Article->Screenshot->find('list');
		$videos = $this->Article->Video->find('list');
		$tiers = $this->Article->Tier->find('list');
		$this->set(compact('screenshots', 'videos', 'tiers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Article->delete()) {
			$this->Session->setFlash(__('The article has been deleted.'));
		} else {
			$this->Session->setFlash(__('The article could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
