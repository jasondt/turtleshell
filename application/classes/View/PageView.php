<?php

namespace View;

use Kohana;
use Media;
use URL;

abstract class PageView extends LayoutView {

	protected $_title = 'Page';

	public function __construct()
	{
		parent::__construct();
	}

	public function js_array()
	{
		return array(
			'base_url'    => URL::base(),
			'environment' => Kohana::$environment_string,
			'media_url'   => Media::url(NULL),
		);
	}

	public function js_export()
	{
		return json_encode($this->js_array());
	}

	public function title()
	{
		return $this->_title;
	}

	public function profiler()
	{
		return View::factory('profiler/stats');
	}
}