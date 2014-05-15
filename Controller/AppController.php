<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $components = array(
		'Session',
		'Auth',
		'Paginator' => array('limit' => 5),
		'RequestHandler',
	);

	public $helpers = array(
		'Session'
	);

	public function beforeFilter() {
		$this->Auth->allow('index', 'feed', 'view', 'top');
	}
}
