<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        #return view('welcome_message');
        return  "hola CI4";
    }
}
