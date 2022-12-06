<?php

$path = realpath(dirname(__FILE__) . '/../');
define('APPLICATION_PATH', $path);

//require_once APPLICATION_PATH . '/vendor/autoload.php';

use Yaf\Application;

try {
    $app = new Application(APPLICATION_PATH . "/application.ini");
    $app->bootstrap()->run();
} catch (Exception $e) {
    print_r($e);
}