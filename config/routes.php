<?php

use Mvc\Routing\Router as Router;



$routerArr = array(
    '/' => function () {
        require_once VIEW_PATH . '/home.php';
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