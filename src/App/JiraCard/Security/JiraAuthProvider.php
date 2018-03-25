<?php


namespace App\JiraCard\Security;


use App\JiraCard\Security\Authenticator\JiraAuthenticator;
use Laravel\Lumen\Application;
use Xervice\Service\Service\ServiceProviderInterface;

class JiraAuthProvider implements ServiceProviderInterface
{
    /**
     * @param \Laravel\Lumen\Application $app
     */
    public function register(Application $app)
    {
        $app->routeMiddleware(
            [
                'auth' => JiraAuthenticator::class
            ]
        );
    }

}