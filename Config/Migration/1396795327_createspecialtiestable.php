<?php
class Createspecialtiestable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'specialties' => array(
					'id' => array(
						'type' => 'integer', 
						'null' => false, 
						'default' => NULL, 
						'key' => 'primary'
					),
					'nom' => array(
						'type' => 'string', 
						'null' => true, 
						'default' => NULL, 
						'length' => 30, 
						'collate' => 'latin1_swedish_ci', 
						'charset' => 'latin1'
					),
					'state' => array(
						'type' => 'integer', 
						'null' => true, 
						'default' => NULL
					),
					'classe_id' => array(
						'type' => 'integer', 
						'null' => true, 
						'default' => NULL, 
						'key' => 'index'
					),
					'indexes' => array(
						'PRIMARY' => array(
							'column' => 'id', 
							'unique' => 1
						),
						'classe_id' => array(
							'column' => 'classe_id', 
							'unique' => 0
						),
					),
					'tableParameters' => array(
						'charset' => 'latin1', 
						'collate' => 'latin1_swedish_ci', 
						'engine' => 'InnoDB'
					),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'specialties'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
