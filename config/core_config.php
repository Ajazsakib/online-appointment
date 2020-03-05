<?php

if(!defined('DEBUG'))
    define('DEBUG', 1);

if (!defined('WEB_DOMAIN_NAME'))
	define('WEB_DOMAIN_NAME', 'my.html5');

if (!defined('WEB_DOMAIN_URL'))
    define('WEB_DOMAIN_URL', 'http://'.WEB_DOMAIN_NAME);
    
if (!defined('CONTROLLER_PATH'))
    define('CONTROLLER_PATH', WEB_DOMAIN_URL . DS . 'src/Controller');
    
if (!defined('VIEW_PATH'))
    define('VIEW_PATH', dirname(__DIR__) . DS . 'views');
    

if (!defined('IMG_PATH'))
    define('IMG_PATH', WEB_DOMAIN_URL . DS . 'assets/images');

if (!defined('CSS_PATH'))
    define('CSS_PATH', WEB_DOMAIN_URL . DS . 'assets/css');

if (!defined('JS_PATH'))
    define('JS_PATH', WEB_DOMAIN_URL . DS . 'assets/js');

if (!defined('HOSTNAME'))
    define("HOSTNAME" , "localhost");

if (!defined('USERNAME'))
    define("USERNAME" , "root");

if (!defined('PASSWORD'))
    define("PASSWORD" , "");

if (!defined('DBNAME'))
    define("DBNAME" , "ignou_project");


if(DEBUG) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}