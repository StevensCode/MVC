<?php
/**
* Weather App using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\models;

use Mockery;

class WeatherTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
    }

    public function tearDown()
    {
        Mockery::close();
    }

    public function testWeatherManHasJsonResults()
    {
        $jsonTest = new weather();
        
        $json = $jsonTest->weatherMan();

        $temperature = $json['temp_f'];

        $fixture = [
            'city' => 'Detroit',
            'state' => 'MI',
            'temp_f' => $temperature
            ];
        
        $this->assertEquals($fixture, $json);
    }
}
