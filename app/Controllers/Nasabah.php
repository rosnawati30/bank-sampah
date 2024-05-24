<?php

namespace App\Controllers;

class Nasabah extends BaseController
{
    public function index(): string
    {
        return view('nasabah/nasabah_show');
    }

    public function create()
    {
        return view('nasabah/nasabah_add');
    }

    public function view()
    {
        return view('nasabah/nasabah_detail');
    }

    public function update()
    {
        return view('nasabah/nasabah_update');
    }
}
