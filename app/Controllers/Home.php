<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo '11';
        return view('welcome_message');
    }
}
