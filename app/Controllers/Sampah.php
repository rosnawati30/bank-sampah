<?php

namespace App\Controllers;

class Sampah extends BaseController
{
    public function index(): string
    {
        return view('sampah_show');
    }
}
