<?php

namespace Controller;

use Controller;
use View\Page\News\Index;

class News extends Controller {

	public function action_index()
	{
            $view = new Index;
            $view->set_layout('Layout/News');
            return $view;
	}

}