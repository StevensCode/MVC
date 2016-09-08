<?php

namespace views;

use controllers\CalcController;
use models\CalcModel;

class CalcView
{
    private $model;

    public function __construct(CalcModel $model)
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
