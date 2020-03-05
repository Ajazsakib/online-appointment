<?php

use Mvc\Routing\Router as Router;



$routerArr = array(
    '/' => function () {
		return array(
			"controller" => "AppController",
			"action" => 'home',
		);
    },

    '/abc' => function (){
        echo 'sssefewafdfffffffffffffss';
    }
);

foreach($routerArr as $routePath => $func) {
    Router::add($routePath, $func);
}

foreach($routerArr as $routePath => $func) {
    Router::run($routePath);
}
