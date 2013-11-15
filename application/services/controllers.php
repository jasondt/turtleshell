<?php

use Heroine\Heroine;
use Heroine\ServiceOverrideConfig;

$config = array(
	'callables' => array(
        'Controller\\Home' => function (Heroine $heroine)
		{
			return new Controller\Home;
		},
        'Controller\\Blog' => function (Heroine $heroine)
		{
			return new Controller\Blog;
		},
        'Controller\\Events' => function (Heroine $heroine)
		{
			return new Controller\Events;
		}, 
        'Controller\\Community' => function (Heroine $heroine)
		{
			return new Controller\Community;
		}, 
        'Controller\\News' => function (Heroine $heroine)
		{
			return new Controller\News;
		}, 
        'Controller\\About' => function (Heroine $heroine)
		{
			return new Controller\About;
		}, 
        'Controller\\Contact' => function (Heroine $heroine)
		{
			return new Controller\Contact;
		}, 
        'Controller\\Shop' => function (Heroine $heroine)
		{
			return new Controller\Shop;
		}, 		
	),
);

Heroine::instance('controllers', new ServiceOverrideConfig($config));