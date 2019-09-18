<?php
date_default_timezone_set('Europe/Berlin');
error_reporting(E_ALL & ~E_STRICT);
ini_set('display_errors', 1);
$loader = require __DIR__ . "/../vendor/autoload.php";
$loader->addPsr4('HRProject\\', __DIR__ . '../src/HRProject');
date_default_timezone_set('UTC');

use HRProject\ResourcesContainer\IndexController;

$indexController = new IndexController();
$indexController->indexAction();