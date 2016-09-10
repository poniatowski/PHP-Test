<?php
use Helpers\Router;
use Config;

// if production mode hide all errors
if(PRODUCTION_MODE) error_reporting(0);


$pRouter = new Router();
$pRouter->map('GET', '/', 'IndexController@invoke', 'Home');
$pRouter->map('GET', '/save', 'SaveController@invoke', 'Outsourcing');
$pRouter->map('GET', '/webpage', 'WebpageController@invoke', 'Get Started');

$pRouter->match();


