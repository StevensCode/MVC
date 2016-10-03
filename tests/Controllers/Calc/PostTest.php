<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\Controllers\Calc;

use Mockery;

class PostTest extends \PHPUnit_Framework_TestCase
{
    public function testPostPageInvokedAndPopulatesCalcParameters()
    {
        $post = new Post();

        $request = Mockery::mock('Psr\Http\Message\ServerRequestInterface');
        $response = Mockery::mock('Psr\Http\Message\ResponseInterface');
        $template = Mockery::mock('QL\CJarvis\MVC\libs\Template');

        $postData = [
            'operand1' => 1, 
            'operand2' => 2,
            'operator' => '+'
            ];

        $request->shouldReceive('getParsedBody')->andReturn($postData);

        $template->shouldReceive('render')->andReturnUsing(
            function($arg){
                $this->assertEquals($arg['RESULT'], 3);
            });
        
        $result = $post($request, $response, $template);
    }
}
