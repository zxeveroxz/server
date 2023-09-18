<?php

namespace App\Controllers;

use App\Libraries\Codigo;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function nuevo(): string 
    {
        $n = new Codigo();
        $n->uno();
        return "nuevo2020";
    }
}
