<?php

namespace Controller;

use Controller;
use View\Page\Events\Index;

class Events extends Controller {

	public function action_index()
	{
            $view = new Index;
            $view->set_layout('Layout/Events');
            return $view;
	}

}