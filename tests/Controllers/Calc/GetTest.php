<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\Controllers\Calc;

use Mockery;

class GetTest extends \PHPUnit_Framework_TestCase
{
    public function testGetPageIsInvoked()
    {
        $get = new Get();

        $request = Mockery::mock('Psr\Http\Message\ServerRequestInterface');
        $response = Mockery::mock('Psr\Http\Message\ResponseInterface');
        $template = Mockery::mock('QL\CJarvis\MVC\libs\Template');

        $template->shouldReceive('render')->andReturnUsing(
            function($arg){
                $this->assertEquals(sizeof($arg), 0);
            });
        
        $result = $get($request, $response, $template);
    }
}
