<?php

use Mvc\Routing\Router as Router;

$postData = $_POST;

$routerArr = array(
	[
		'/register-form',
		function () {
			return array(
				"controller" => "AppController",
				"action" => 'register_form',
			);
		},
		'post',
		$postData
	],
    [
    	'/', // url always use "-" in url
		function () { // function to use calculation
			return array(
				"controller" => "AppController", // controller name
				"action" => 'home', // action Name
			);
    	},
		'get', // Method for
	],
	[
		'/register',
		function () {
			return array(
				"controller" => "AppController",
				"action" => 'register',
			);
		},
		'get',
	],
	[
		'/about-us',
		function () {
			return array(
				"controller" => "AppController",
				"action" => 'about',
			);
		},
		'get',
	],
);

foreach($routerArr as $routeParams) {
	$route = $routeParams[0];
	$func = $routeParams[1];
	$method = isset($routeParams[2]) ? $routeParams[2] : 'get';
	$data = isset($routeParams[3]) ? $routeParams[3] : null;
    Router::add($route, $func, $method, $data);
}

foreach($routerArr as $routeParams) {
    Router::run($routeParams[0]);
}
