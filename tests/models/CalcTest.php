<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\models;

class CalcTest extends \PHPUnit_Framework_TestCase
{
    public function testCalcDoesTheMath()
    {
        $calc = new Calc();

        $this->assertEquals($calc->calculate(1,2,'+'), 3.0);
    }
}
