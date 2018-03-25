<?php


namespace App\JiraCard\Controller;


use Xervice\Service\Controller\AbstractController;

class AbstractAuthController extends AbstractController
{

    /**
     * AbstractAuthController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}