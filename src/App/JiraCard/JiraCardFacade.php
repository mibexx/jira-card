<?php


namespace App\JiraCard;


use Xervice\Core\Facade\AbstractFacade;

/**
 * @method \App\JiraCard\JiraCardFactory getFactory()
 * @method \App\JiraCard\JiraCardConfig getConfig()
 */
class JiraCardFacade extends AbstractFacade
{
    public function isAuth()
    {
        return false;
    }
}