<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\Controllers\Calc;

use QL\CJarvis\MVC\models\Calc;
use QL\CJarvis\MVC\CalcView;
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
     * @param Calculator $model
     */
    public function __construct(Calc $model)
    {
        $this->model = $model;
    }

    /**
     * @return calculate
     */
    public function __invoke(Request $request, Response $response)
    {
        $operand1 = $_POST['operand1'];
        $operand2 = $_POST['operand2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $this->model->Add($operand1, $operand2);
                break;
            case '-':
                $this->model->Subtract();
                break;
            case '/':
                $this->model->Divide();
                break;
            case '*':
                $this->model->Multiply();
                break;
        }
    }
}
