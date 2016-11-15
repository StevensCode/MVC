<?php
/**
* Weather App using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\Controllers\Weather;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use QL\CJarvis\MVC\libs\ControllerInterface;
use QL\CJarvis\MVC\libs\Template;
use QL\CJarvis\MVC\models\Weather;

class Post implements ControllerInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @return array
     */
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response,
        Template $template
    ) {
        $parseBody = $request->getParsedBody();

        $model = new Weather();

        $result = $model->weatherMan(
            $parseBody['city'],
            $parseBody['state']
            );

        return $template->render([
            'CITY' => $parseBody['city'],
            'STATE' => $parseBody['state'],
            'DEGREE_F' => $result['temp_f'],
            'GIF' => $result['gif']
        ]);
    }
}
