<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
 */
namespace QL\CJarvis\MVC\libs;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

interface ControllerInterface
{
    public function __invoke(Request $request, Response $response);
}
