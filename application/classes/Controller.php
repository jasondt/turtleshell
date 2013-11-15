<?php

use View\ViewInterface;

class Controller extends Kohana_Controller {

	public function __construct(Request $request = NULL, Response $response = NULL) {}

	public function execute()
	{
		if ( ! $this->request)
			throw new Kohana_Exception('Controller request not set');

		if ( ! $this->response)
			$this->response = Response::factory();

		$action = 'action_'.$this->request->action();

		if ( ! method_exists($this, $action))
		{
			throw HTTP_Exception::factory(404,
				'The requested URL :uri was not found on this server.',
				array(':uri' => $this->request->uri())
			)->request($this->request);
		}

		$view = $this->{$action}();

		if ( ! ($view instanceof ViewInterface OR $view === NULL))
			throw new Kohana_Exception('Controller actions must return a view or null');

		if ($view !== NULL)
		{
			$this->response->body($view->render());
		}

		return $this->response;
	}

}