<?php
App::uses('AppModel', 'Model');
/**
 * Profession Model
 *
 * @property Player $Player
 * @property Speciality $Speciality
 */
class Profession extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Player' => array(
			'className' => 'Player',
			'foreignKey' => 'profession_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Speciality' => array(
			'className' => 'Speciality',
			'foreignKey' => 'profession_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function getAll() {
		$classes = $this->find('all', array(
			'contain' => false,
			'fields' => array(
				'Profession.id',
				'Profession.name'
			),
			'order' => 'Profession.id'
		));
		return $classes;
	}

}
