<?php


namespace App\JiraCard\Security\Authenticator;


use Closure;
use Illuminate\Http\Request;
use Xervice\Service\Middleware\AbstractMiddleware;

class JiraAuthenticator extends AbstractMiddleware
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector|mixed
     * @throws \Core\Locator\Dynamic\ServiceNotParseable
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$this->getFacade()->isAuth()) {
            return redirect('/login');
        }

        return $next($request);
    }

}