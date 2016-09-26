<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
 */
namespace QL\CJarvis\MVC\libs;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use QL\CJarvis\MVC\libs\Template;

interface ControllerInterface
{
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response,
        Template $template
    );
}
