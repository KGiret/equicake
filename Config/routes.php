j<?php
Router::connect('/',						array('controller' => 'articles', 'action' => 'accueil'));

/**
 * Opauth Plugin Routing
 */
Router::connect('/auth/callback',			array('plugin' => 'Opauth', 'controller' => 'opauth', 'action' => 'callback'));
Router::connect('/auth/*',					array('plugin' => 'Opauth', 'controller' => 'opauth', 'action' => 'index'));
Router::connect('/opauth-complete/*',		array('controller' => 'authentications', 'action' => 'callback'));

/**
 * App Routing
 */
/*Router::connect('/:controller',				array('action' => 'index'));
Router::connect('/:controller/:id',			array('action' => 'view'), array('pass' => array('id'), 'id' => '[0-9]+'));
Router::connect('/:controller/:action/:id',	array(), array('pass' => array('id'), 'id' => '[0-9]+'));
Router::connect('/:controller/:action',		array());*/

/**
 * EquinoXx routing
 */
Router::connect('/accueil', 				array('controller' => 'articles', 'action' => 'accueil'));
Router::connect('/roster', 					array('controller' => 'players', 'action' => 'roster'));
Router::connect('/screenshots/*',      		array('controller' => 'screenshots', 'action' => 'media'));
Router::connect('/videos/*', 				array('controller' => 'videos', 'action' => 'media'));
Router::connect('/archives/*', 				array('controller' => 'articles', 'action' => 'archives'));



