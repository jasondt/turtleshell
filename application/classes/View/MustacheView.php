<?php

namespace View;

use Kohana;
use HTML;
use Mustache_Engine;
use Mustache_Loader_FilesystemLoader;

class MustacheView extends BaseView {

	protected $_engine;

	protected $_template;

	public function __construct()
	{
		$this->_engine = new Mustache_Engine(
			array(
				'loader' => new Mustache_Loader_FilesystemLoader(APPPATH.'templates'),
				'partials_loader' => new Mustache_Loader_FilesystemLoader(APPPATH.'templates/partials'),
				'escape' => function($value) {
					return HTML::chars($value);
				},
				'cache' => Kohana::$cache_dir,
			)
		);
	}

	public function render()
	{
		if ($this->_template === NULL)
		{
			$this->_template = explode('\\', get_class($this));
			array_shift($this->_template);
			$this->_template = implode('/', $this->_template);
		}
                
		return $this->_engine->render($this->_template, $this);
	}

}