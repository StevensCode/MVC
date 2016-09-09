<?php

namespace calculator\views;

use calculator\controllers\CalcController;
use calculator\models\Calc;

class CalcView
{
    private $model;

    public function __construct(Calc $model)
    {
        $this->model = $model;
    }

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
<div class="answer">'. $this->model->getAnswer() . '</div>';
        return $output;
    }
}
