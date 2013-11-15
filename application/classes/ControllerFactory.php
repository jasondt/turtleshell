<?php

use Heroine\Heroine;

class ControllerFactory {

	protected $_request;
	protected $_response;

	public function load($controller, Request $request, Response $response)
	{
		$this->_request  = $request;
		$this->_response = $response;

		if ( ! class_exists($controller))
		{
			throw HTTP_Exception::factory(404,
				'The requested URL :uri was not found on this server.',
				array(':uri' => $request->uri())
			)->request($request);
		}

		// Load the controller using the service manager
		$instance = Heroine::instance('controllers')->get($controller);

		$instance->request  = $request;
		$instance->response = $response;

		return $instance;
	}

}