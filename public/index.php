<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("../templates/");

$app->get('/', function (Request $request,  Response $response) {
    $response = $this->view->render($response, "index.phtml");
    return $response;
});

$app->post('/', function (Request $request,  Response $response) {
    $data = $request->getParsedBody();
    $response = $this->view->render($response, "index.phtml");
    return $response;
});

$app->run();
