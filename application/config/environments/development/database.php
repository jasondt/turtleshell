<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	'default' => array(
		'connection' => array(
			// @TODO: change this to be project-specific
			'hostname'   => 'localhost',
			'username'   => 'root',
			'password'   => 'synapse',
			'database'   => 'projecttemplate_vm',
			'persistent' => FALSE,
		),
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
);
