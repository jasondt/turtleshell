<?php

namespace Controller;

use Controller;
use View\Page\Shop\Index;

class Shop extends Controller {

	public function action_index()
	{
            $view = new Index;
            $view->set_layout('Layout/Shop');
            return $view;
	}

}