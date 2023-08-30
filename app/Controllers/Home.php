<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo 'Güenas mundo';
        return view('welcome_message');
    }

}
