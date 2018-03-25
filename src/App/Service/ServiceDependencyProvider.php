<?php


namespace App\Service;


use App\JiraCard\Route\JiraRoutes;
use App\JiraCard\Security\JiraAuthProvider;
use Xervice\Service\ServiceDependencyProvider as XerviceServiceDependencyProvider;

class ServiceDependencyProvider extends XerviceServiceDependencyProvider
{
    /**
     * @return \Xervice\Service\Route\RouteInterface[]
     */
    protected function getRouteProvider()
    {
        return [
            new JiraRoutes()
        ];
    }

    /**
     * @return \Xervice\Service\Service\ServiceProviderInterface[]
     */
    protected function getApplicationServiceProvider()
    {
        return [
            new JiraAuthProvider()
        ];
    }


}