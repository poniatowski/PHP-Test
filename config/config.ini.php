<?php

namespace Config;

session_start();
session_regenerate_id(true);

// TODO put all define variable in one class or in *.init file
define("DOMAIN", '127.0.0.20');
define("URL", 'https://www.sky_test.internal');

// main path
define("DOCUMENT_ROOT", realpath(dirname(__DIR__)).'/');

// main app
define("PRODUCTION_MODE", false);
define("SALT", "0987654321!@#$%^&*()_+qwertyuiop[[]");
define("DATE_NOW", date("Y-m-d"));
define("LIB", "lib/");

spl_autoload_register(function ($className)
{
    $fileName  = DOCUMENT_ROOT;
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = strtolower(substr($className, 0, $lastNsPos));
        $className = substr($className, $lastNsPos + 1);
        $fileName .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    if(file_exists($fileName)){
        require_once $fileName;
    }else{
        throw new \Exception("Autoload class error. Cannot load '".$className."' class." );
    }
});