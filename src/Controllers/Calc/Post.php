<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\Controllers\Calc;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use QL\CJarvis\MVC\libs\ControllerInterface;
use QL\CJarvis\MVC\models\Calc;

class Post implements ControllerInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return array
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        $parseBody = $request->getParsedBody();

        $model = new Calc(
            $parseBody['operand1'],
            $parseBody['operand2'],
            $parseBody['operator']
        );

        $result = $model->calculate();
        // for now, eventually data will bind to document object, next version
        return ['RESULT' => $result];
    }
}
