<?php

namespace View;

use Kostache_Layout;

abstract class BaseView implements ViewInterface {

	protected $_layout = 'Layout/Default';
	protected $_renderer;

	public function __construct()
	{
		$this->_renderer = Kostache_Layout::factory($this->_layout);
	}

	/**
	 * Returns the lowercased class name without the view_ prefix
	 * Useful for giving pages and widgets a class/id
	 *
	 *     `<body id="{{view_name}}">`
	 *
	 * @return string
	 */
	public function view_name()
	{
		$class = str_replace('\\', '-', get_class($this));

		// Remove 'View_' prefix and lowercase
		return strtolower(substr($class, 5));
	}

	public function render()
	{
		return $this->_renderer->render($this);
	}

}