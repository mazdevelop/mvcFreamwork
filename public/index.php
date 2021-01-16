<?php

use app\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/constans.php';
$app = new Application(dirname(__DIR__));
require_once __DIR__.RTH;



$app->run();
