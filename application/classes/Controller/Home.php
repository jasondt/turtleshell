<?php

namespace Controller;

use Controller;
use View\Page\Home\Index;

class Home extends Controller {

	public function action_index()
	{
            $view = new Index;
            $view->set_layout('Layout/Home');
            return $view;
	}

}