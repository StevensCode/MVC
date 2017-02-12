<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/

use QL\CJarvis\MVC\libs\Bootstrap;

require_once __DIR__.'/../vendor/autoload.php';

if (!$app = Bootstrap::getInstance()) {
    http_response_code(500);
    echo "The application failed to start.\n";
    exit;
};

$app->run();
