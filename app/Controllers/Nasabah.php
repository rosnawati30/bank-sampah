<?php

namespace App\Controllers;

class Nasabah extends BaseController
{
    public function index(): string
    {
        return view('nasabah_show');
    }
}
