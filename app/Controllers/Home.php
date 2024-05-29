<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\NasabahModel;
use App\Models\SampahModel;

class Home extends BaseController
{
    protected $transaksiModel, $nasabahModel, $sampahModel;

    public function __construct(){
        $this->transaksiModel = new TransaksiModel();
        $this->nasabahModel = new NasabahModel();
        $this->sampahModel = new SampahModel();
    }

    public function index(): string
    {
        $transaksi = $this->transaksiModel->findAll();

        $totalPenjualan = 0;
        $totalBerat = 0;

        foreach ($transaksi as $t){
            $totalPenjualan = $totalPenjualan + $t['total_harga'];
        }

        foreach ($transaksi as $t){
            $totalBerat = $totalBerat + $t['berat'];
        }

        $data = [
            'title' => 'Dashboard',
            'transaksi' => $transaksi,
            'nasabah'=> $this->nasabahModel->findAll(),
            'sampah' => $this->sampahModel->findAll(),
            'totalpenjualan' => $totalPenjualan,
            'totalberat' => $totalBerat
        ];

        return view('dashboard', $data);
    }
}
