<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/

namespace QL\CJarvis\MVC\Bootstrap;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use QL\CJarvis\MVC\models\Calc;
use QL\CJarvis\MVC\controllers\CalcController;

require '../vendor/autoload.php';

$app = new \Slim\App;

$container = $app->getContainer();

$container['view'] = function ($container)
{
    $view = new \Slim\Views\Twig("../templates/");
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));
    return $view;
};

$app->get('/math', function (Request $request, Response $response)
{
    $response = $this->view->render($response, "calculate.twig");
    return $response;
})->setName('math');

$app->post('/math', function (Request $request, Response $response, $args)
{
    $operand1 = $request->getParam('operand1');
    $operand2 = $request->getParam('operand2');
    $operator = $request->getParam('operator');

    $model = new Calc($operand1, $operand2, $operator);
    $controller = new CalcController($model);
    $controller->calculate();
    echo $model->answer;

    $response = $this->view->render($response, "calculate.twig");
    return $response;
})->setName('math');

$app->run();
