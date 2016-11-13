<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\models;

use Mockery;

class CalcTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }
    public function testCalcAdds()
    {
        $calc = new Calc();

        $this->assertEquals($calc->calculate(1,2,'+'), 3.0);
    }
    public function testCalcSubtracts()
    {
        $calc = new Calc();

        $this->assertEquals($calc->calculate(1,2,'-'), -1.0);
    }
    public function testCalcMultiplies()
    {
        $calc = new Calc();

        $this->assertEquals($calc->calculate(1,2,'*'), 2.0);
    }
    public function testCalcDivides()
    {
        $calc = new Calc();

        $this->assertEquals($calc->calculate(1,2,'/'), 0.5);
    }
}
