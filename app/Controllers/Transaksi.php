<?php

namespace App\Controllers;

class Transaksi extends BaseController
{
    public function index(): string
    {
        return view('transaksi_show');
    }
}
