<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\Controllers\Calc;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use QL\CJarvis\MVC\libs\ControllerInterface;
use QL\CJarvis\MVC\libs\Template;

class Get implements ControllerInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param Template $template
     * @return string|null
     */
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response,
        Template $template
    ) {
        return $template->render([]);
    }
}
