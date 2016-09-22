<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\Controllers\Calc;

use QL\CJarvis\MVC\libs\ControllerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class Get implements ControllerInterface
{
    /**
     * @return calculate
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        return [];
    }
}
