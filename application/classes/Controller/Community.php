<?php

namespace Controller;

use Controller;
use View\Page\Community\Index;

class Community extends Controller {

	public function action_index()
	{
            $view = new Index;
            $view->set_layout('Layout/Community');
            return $view;
	}

}