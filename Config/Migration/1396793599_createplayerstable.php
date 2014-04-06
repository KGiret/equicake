<?php
class Createplayerstable extends CakeMigration {

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
				'players' => array(
					'id' => array(
						'type' => 'integer', 
						'null' => false, 
						'default' => NULL, 
						'key' => 'primary
					'),
					'name' => array(
						'type' => 'string', 
						'null' => true, 
						'default' => NULL, 
						'length' => 20, 
						'collate' => 'latin1_swedish_ci', 
						'charset' => 'latin1'
					),
					'classe_id' => array(
						'type' => 'integer', 
						'null' => true, 
						'default' => NULL, 
						'key' => 'index'
					),
					'specialite_id' => array(
						'type' => 'integer', 
						'null' => true, 
						'default' => NULL, 
						'key' => 'index'
					),
					'role_id' => array(
						'type' => 'integer', 
						'null' => true, 
						'default' => NULL, 
						'key' => 'index'
					),
					'rank_id' => array(
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
						'spe_id' => array(
							'column' => 'specialite_id', 
							'unique' => 0
						),
						'role_id' => array(
							'column' => 'role_id', 
							'unique' => 0
						),
						'rang_id' => array(
							'column' => 'rank_id', 
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
				'players'
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
