<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	'disabled'                  => FALSE,
	// Environment to include with log message.
	'environment'               => 'Production',
	// Rollbar access token (needs post_server_item permission).
	// @TODO: Set your project's access token here
	'access_token'              => NULL,
	// Batched needs to be turned off because we are using the Kohana log system to batch send the messages.
	'batched'                   => FALSE,
);
