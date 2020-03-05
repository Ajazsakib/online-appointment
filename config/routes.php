<?php

use Mvc\Routing\Router as Router;

$routerArr = array(
    '/' => function () {
		return array(
			"controller" => "AppController",
			"action" => 'home',
		);
    },
    '/register' => function () {
        return array(
			"controller" => "AppController",
			"action" => 'register',
		);
    },
    '/register-form' => function () {
        return array(
			"controller" => "AppController",
            "action" => 'register_form',
            "method" => 'post'
		);
    },
    '/about-us' => function () {
        return array(
			"controller" => "AppController",
            "action" => 'about',
		);
    },
);

foreach($routerArr as $routePath => $func) {
    Router::add($routePath, $func);
}

foreach($routerArr as $routePath => $func) {
    Router::run($routePath);
}
