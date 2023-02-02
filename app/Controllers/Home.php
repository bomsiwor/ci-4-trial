<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->data = 123;
    }

    public function index()
    {
        return view('welcome_message');
    }
}
