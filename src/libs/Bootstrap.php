<?php
/**
* Calculator using MVC.
* Project to learn and study Model View Controller
* in PHP with Slim Framework
*/
namespace QL\CJarvis\MVC\libs;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Symfony\Component\Yaml\Yaml;

class Bootstrap
{
    const ROOT = __DIR__. '/../..';

    /**
     * @var Slim\App
     */
    protected static $app;

    /**
     * @return Slim\App
     */
    public static function getInstance()
    {
        if (static::$app === null) {
            static::$app = self::init();
        }
        return static::$app;
    }

    /**
     * @return null
     */
    protected function __construct()
    {
        // prevent create new instance of this class
    }

    /**
     * @return Slim\App
     */
    protected static function init()
    {
        $slimApp = new App();

        $container = $slimApp->getContainer();

        // add twig extension

        $templatePath = self::ROOT. '/src/views/';

        $container['view'] = function ($container) use ($templatePath) {
            $view = new Twig($templatePath);
            $view->addExtension(new TwigExtension(
                $container['router'],
                $container['request']->getUri()
            ));
            return $view;
        };

        self::loadRoutes($slimApp);

        // load routes
        return $slimApp;
    }

    /**
     * @param Slim\App $slimApp
     * @return null
     */
    protected static function loadRoutes($app)
    {
        $routesInfo = Yaml::parse(file_get_contents(self::ROOT.'/configuration/routes.yml'));

        foreach ($routesInfo as $key => $val) {
            $method = $val['method'];
            $controller = $val['controller'];
            $view = $val['view'];
            $app->$method(
                $val['url'],
                function (ServerRequestInterface $request, ResponseInterface $response) use ($controller, $view) {
                    $result = call_user_func(new $controller, $request, $response);
                    return $this->view->render($response, $view, $result);
                }
            );
        }
    }
}
