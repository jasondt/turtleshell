<?php

namespace View;

interface ViewInterface {

	/**
	 * Returns the response body
	 * @return string body
	 */
	public function render();

}