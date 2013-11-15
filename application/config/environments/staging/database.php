<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	'default' => array(
		'type'       => 'MySQL',
		'connection' => array(
			'hostname'   => Arr::get($_SERVER, 'DB1_HOST').':'.Arr::get($_SERVER, 'DB1_PORT'),
			'username'   => Arr::get($_SERVER, 'DB1_USER'),
			'password'   => Arr::get($_SERVER, 'DB1_PASS'),
			'database'   => Arr::get($_SERVER, 'DB1_NAME'),
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => TRUE,
		'profiling'    => FALSE,
	),
);