<?php

use Mvc\Routing\Router as Router;

$postData = $_POST;
$routerArr = array(
    [
        "url" => '/', // page url
        "controller" => "AppController", // class controller should be added
        "action" => 'home', // action to be called
        "method" => "get" // OPTIONAL | default value is get;
    ],
	[
		"url" => '/thank-you',
        "controller" => "AppController",
        "action" => 'form_validation',
		"method" => "post",
		"data" => $postData
	],
    [
        "url" => '/user-dashboard',
        "controller" => "AppController",
        "action" => 'user_dashboard',
    ],
    [
        "url" => '/doctor-dashboard',
        "controller" => "AppController",
        "action" => 'doctor_dashboard',
	],
    [
        "url" => '/admin-dashboard',
        "controller" => "AppController",
        "action" => 'admin_dashboard',
    ],
    [
        "url" => '/register',
        "controller" => "AppController",
        "action" => 'register',
    ],
    [
        "url" => '/login',
        "controller" => "AppController",
        "action" => 'login',
    ],
);

foreach($routerArr as $routeParams) {
	$route = $routeParams['url'];
	$controller = $routeParams['controller'];
	$action = $routeParams['action'];
    $method = isset($routeParams['method']) ? $routeParams['method'] : 'get';
    $data = isset($routeParams['data']) ? $routeParams['data'] : null;
    Router::add($route, $controller, $action, $method, $data);
}

foreach($routerArr as $routeParams) {
    Router::run($routeParams['url']);
}
