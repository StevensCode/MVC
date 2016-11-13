<?php
/**
* Weather App using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\Controllers\Weather;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use QL\CJarvis\MVC\libs\ControllerInterface;
use QL\CJarvis\MVC\libs\Template;
use QL\CJarvis\MVC\models\Weather;

class Get implements ControllerInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param Template $template
     * @return string|null
     */
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response,
        Template $template
    ) {
        $parseBody = $request->getParsedBody();

        $model = new Weather();

        $weather = $model->weatherMan();

        return $template->render([
            'CITY' => $weather['city'],
            'STATE' => $weather['state'],
            'DEGREE_F' => $weather['temp_f'],
            ]);
    }
}
