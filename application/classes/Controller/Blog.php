<?php

namespace Controller;

use Controller;
use View\Page\Blog\Index;

class Blog extends Controller {

	public function action_index()
	{
            $view = new Index;
            $view->set_layout('Layout/Blog');
            return $view;
	}

}