<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace views;

use controllers\CalcController;
use models\CalcModel;

class CalcView
{
    /**
     * @var Calculator
     */
    private $model;

    /**
     * @param Calculator $model
     */
    public function __construct(CalcModel $model)
    {
        $this->model = $model;
    }

    /**
     * @return string output
     */
    public function output()
    {
        $output = '<form method="post" action="index.php?action=calculate">
    <input name="operator1" type="text">
    <select name="operand" size="4">
        <option value="+" selected="selected">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input name="operator2" type="text"><br>
    <input type="submit" value="Calculate">
</form>
<div class="answer">'. $this->model->answer . '</div>';
        return $output;
    }
}
