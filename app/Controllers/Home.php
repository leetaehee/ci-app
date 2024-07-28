<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $a = 3;
        $b = 3;
        $c = $a + $b;

        echo $a . " + " .  $b . " = " . $c;

        return view('welcome_message');
    }
}
