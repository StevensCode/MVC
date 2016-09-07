<?php
//view 
namespace views;

use controllers\CalcController;

class CalcView
{
    private $model;
    private $controller;

    public function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    //output is handling model functions currently
    public function output()
    {
        $answer = $this->model->calculate();
        $answer = $this->model->getAnswer();
        
        return 
<<<_END
<form method="post" action="index.php">
    <input name="operator1" type="text"><br>
    <select name="operand">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select><br>
    <input name="operator2" type="text"><br>
    <input type="submit" value="Calculate">
</form>
<div class="answer">$answer</div>
_END;

    }
}
