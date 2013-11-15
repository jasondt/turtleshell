<?php

namespace View;

class LayoutView extends MustacheView {
	/**
	 * @var string partial name for content
	 */
	const CONTENT_PARTIAL = 'content';

	/**
	 * @var string layout path
	 */
	protected $_layout = 'Layout/Default';

	public function set_layout($layout)
	{
		$this->_layout = (string) $layout;
	}

	public function render()
	{
		//$this->_engine->setPartials(
		//	array(
		//		self::CONTENT_PARTIAL => parent::render()
		//	)
		//);

		return $this->_engine->render($this->_layout, $this);
	}
}