<?php


namespace App\JiraCard\Controller;


use Illuminate\Http\Request;

class IndexController extends AbstractAuthController
{
    public function indexAction(Request $request)
    {
        return 'Hello World';
    }
}