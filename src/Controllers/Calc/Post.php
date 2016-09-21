<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\Controllers\Calc;

use QL\CJarvis\MVC\models\Calc;
use QL\CJarvis\MVC\libs\ControllerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class Post implements ControllerInterface
{
    /**
     * @var Calculator
     */
    private $model;

    /**
     * @return calculate
     */
    public function __invoke(Request $request, Response $response)
    {
        $post = $request->getParsedBody();

        $operand1 = $post['operand1'];
        $operand2 = $post['operand2'];
        $operator = $post['operator'];

        $this->model = new Calc($operand1, $operand2, $operator);

        switch ($operator) {
            case '+':
                $this->model->Add($operand1, $operand2);
                echo $this->model->answer;
                return $response;
                break;
            case '-':
                $this->model->Subtract($operand1, $operand2);
                echo $this->model->answer;
                return $response;
                break;
            case '/':
                $this->model->Divide($operand1, $operand2);
                echo $this->model->answer;
                return $response;
                break;
            case '*':
                $this->model->Multiply($operand1, $operand2);
                echo $this->model->answer;
                return $response;
                break;
        }
    }
}
