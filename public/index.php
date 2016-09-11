<?php
use Helpers\Router;

define("CONFIG", "./../config/");

// include config file
include_once(CONFIG . "config.ini.php");

// if production mode hide all errors
if(PRODUCTION_MODE) error_reporting(0);


$pRouter = new Router();
$pRouter->map('GET', '/', 'IndexController@invoke', 'Home');
$pRouter->map('POST', '/save', 'SaveController@invoke', 'Outsourcing');
$pRouter->map('GET', '/webpage', 'WebpageController@invoke', 'Get Started');

$pRouter->match();


