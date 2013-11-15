<?php defined('SYSPATH') OR die('No direct access allowed.');

if (strpos($_SERVER['APP_NAME'], '-qa-') !== FALSE)
{
	$environment = 'QA-pull';
}
else
{
	$environment = 'QA';
}

return array(
	'disabled'                  => FALSE,
	// Environment to include with log message.
	'environment'               => $environment,
	// Rollbar access token (needs post_server_item permission).
	// @TODO: Set your project's access token here
	'access_token'              => NULL,
	// Batched needs to be turned off because we are using the Kohana log system to batch send the messages.
	'batched'                   => FALSE,
);
