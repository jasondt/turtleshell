<?php

namespace Controller;

use Controller;
use View\Page\Contact\Index;

class Contact extends Controller {

	public function action_index()
	{
            $view = new Index;
            $view->set_layout('Layout/Contact');
            return $view;
	}

}