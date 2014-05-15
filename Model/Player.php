<?php
App::uses('AppModel', 'Model');
/**
 * Player Model
 *
 * @property Profession $Profession
 * @property Role $Role
 * @property Rank $Rank
 * @property speciality $Speciality
 */
class Player extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Profession' => array(
			'className' => 'Profession',
			'foreignKey' => 'profession_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Rank' => array(
			'className' => 'Rank',
			'foreignKey' => 'rank_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Speciality' => array(
			'className' => 'speciality',
			'foreignKey' => 'specialite_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
