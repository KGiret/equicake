<?php
class CreateTiersTable extends CakeMigration {

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
				'tiers' => array(
					'id' => array(
						'type' => 'integer',
						'null' => false,
						'default' => NULL, 
						'key' => 'primary',
					),
					'name' => array(
						'type' => 'string', 
						'null' => true, 
						'default' => NULL, 
						'length' => 50, 
						'collate' => 'latin1_swedish_ci', 
						'charset' => 'latin1',
					),
					'number' => array(
						'type' => 'integer', 
						'null' => true, 
						'default' => NULL, 
						'length' => 2,
					),
					'state' => array(
						'type' => 'integer', 
						'null' => true, 
						'default' => NULL, 
						'length' => 1,
					),
					'indexes' => array(
						'PRIMARY' => array(
							'column' => 'id',
							'unique' => 1
						),
					),
					'tableParameters' => array(
						'charset' => 'latin1', 
						'collate' => 'latin1_swedish_ci', 
						'engine' => 'InnoDB'
					),
				),
			),
			'down' => array(
				'drop_table' => array(
					'tiers'
				),
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
