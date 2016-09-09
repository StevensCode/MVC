<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace calculator\views;

use calculator\controllers\CalcController;
use calculator\models\Calc;

class CalcView
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
     * @return string output
     */
    public function output()
    {
        $output = '<form method="post" action="index.php?action=calculate">
    <input name="operand1" type="text">
    <select name="operator" size="4">
        <option value="+" selected="selected">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input name="operand2" type="text"><br>
    <input type="submit" value="Calculate">
</form>
<div class="answer">'. $this->model->answer . '</div>';
        return $output;
    }
}
