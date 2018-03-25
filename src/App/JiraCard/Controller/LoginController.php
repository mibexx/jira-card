<?php


namespace App\JiraCard\Controller;


use Illuminate\Http\Request;
use Xervice\Service\Controller\AbstractController;

class LoginController extends AbstractController
{

    public function loginAction(Request $request)
    {
        return 'Login';
    }
}