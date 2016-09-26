<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\libs;

use Psr\Http\Message\ResponseInterface;
use Slim\Views\Twig as Twig;

class Template
{
    /**
     * @var Twig
     */
    public $twig;

    /**
     * @var string
     */
    public $template;

    /**
     * @var ResponseInterface
     */
    public $response;

    /**
     * @param Twig_Environment $env
     * @param string $template
     * @param ResponseInterface $response
     */
    public function __construct(Twig $twig, string $template, ResponseInterface $response)
    {
        $this->twig = $twig;
        $this->template = $template;
        $this->response = $response;
    }

    /**
     * @param array $result
     * @return string
     */
    public function render(array $result)
    {
        return $this->twig->render(
            $this->response,
            $this->template,
            $result
        );
    }
}
