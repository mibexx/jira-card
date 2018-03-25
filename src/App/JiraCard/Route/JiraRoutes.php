<?php


namespace App\JiraCard\Route;


use App\JiraCard\Controller\IndexController;
use App\JiraCard\Controller\LoginController;
use Laravel\Lumen\Routing\Router;
use Xervice\Service\Route\RouteInterface;

class JiraRoutes implements RouteInterface
{
    /**
     * @param \Laravel\Lumen\Routing\Router $router
     */
    public function register(Router $router)
    {
        $router->get('/', IndexController::class . '@indexAction');
        $router->get('/login', LoginController::class . '@loginAction');
    }

}