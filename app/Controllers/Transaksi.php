<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\BeratModel;
use App\Models\NasabahModel;
use App\Models\SampahModel;

class Transaksi extends BaseController
{
    protected $transaksiModel, $beratModel, $nasabahModel, $sampahModel;

    public function __construct(){
        $this->transaksiModel = new TransaksiModel();
        $this->beratModel = new BeratModel();
        $this->nasabahModel = new NasabahModel();
        $this->sampahModel = new SampahModel();
    }

    public function index(): string
    {
        return view('nasabah/nasabah_detail');
    }

    public function create($id_nasabah)
    {
        $this->transaksiModel->save([
            'berat' => $this->beratModel->getBerat()['berat'],
            'id_nasabah' => $id_nasabah
        ]);

        $this->beratModel->resetBerat();

        return redirect()->to('transaksi/add/'.$id_nasabah);
    }

    public function add($id_nasabah)
    {
        $data = [
            'title' => 'Tambah Transaksi',
            'transaksi' => $this->transaksiModel->getLastTransaksiNasabah($id_nasabah),
            'nasabah' => $this->nasabahModel->where(['id_nasabah'=>$id_nasabah])->first(),
            'sampah' => $this->sampahModel->orderBy('item', 'ASC')->findAll()
        ];

        return view('transaksi/transaksi_add', $data);
    }

    public function save()
    {
        $data_sampah = $this->sampahModel->where(['id_sampah' => $this->request->getVar('jenis')])->first();
        $berat = $this->request->getVar('berat');
        $id_nasabah = $this->request->getVar('id_nasabah');

        $this->transaksiModel->save([
            'id_transaksi' => $this->request->getVar('id_transaksi'),
            'total_harga' => $data_sampah['harga'] * $berat,
            'id_sampah' => $this->request->getVar('jenis')
        ]);
        
        $nasabah = $this->nasabahModel->find($id_nasabah);
        $total_sampah = $nasabah['total_sampah'] + $berat;

        $this->nasabahModel->update($id_nasabah, [
            'total_sampah' => $total_sampah
        ]);

        session()->setFlashdata('pesan', 'Transaksi berhasil ditambahkan!');
        return redirect()->to('nasabah/detail/'.$id_nasabah);
    }

    public function view($id_nasabah)
    {
        $data = [
            'title' => 'Detail Nasabah',
            'transaksi' => $this->transaksiModel->where(['transaksi.id_nasabah'=>$id_nasabah])->orderBy('transaksi.created_at', 'DESC')->getTransaksiNasabah(),
            'berat' => $this->beratModel->getBerat(),
            'nasabah' => $this->nasabahModel->where(['id_nasabah'=>$id_nasabah])->first(),
            'sampah' => $this->sampahModel->findAll()
        ];
        return view('nasabah/nasabah_detail', $data);
    }

    public function weight()
    {
        $weight = $this->beratModel->getBerat();
        // $weight = rand(1, 100);

        echo($weight['berat']);
    }

    public function cancel($id_transaksi)
    {
        $transaksi = $this->transaksiModel->find($id_transaksi);
        $id_nasabah = $transaksi['id_nasabah'];
        
        $this->transaksiModel->delete($id_transaksi);

        session()->setFlashdata('pesan', 'Transaksi berhasil dihapus!');
        return redirect()->to('nasabah/detail/'.$id_nasabah);
    }

    public function delete($id_transaksi){
        $transaksi = $this->transaksiModel->find($id_transaksi);
        $berat = $transaksi['berat'];
        $id_nasabah = $transaksi['id_nasabah'];
        
        $nasabah = $this->nasabahModel->find($id_nasabah);
        $total_sampah = $nasabah['total_sampah'] - $berat;

        $this->nasabahModel->update($id_nasabah, [
            'total_sampah' => $total_sampah
        ]);

        $this->transaksiModel->delete($id_transaksi);
        $this->resetAutoIncrement();
        
        session()->setFlashdata('pesan', 'Transaksi berhasil dihapus!');
        return redirect()->to('nasabah/detail/'.$id_nasabah);
    }

    private function resetAutoIncrement(){
        $db = \Config\Database::connect();
        $query = $db->query("ALTER TABLE nasabah AUTO_INCREMENT = 1");
    }
}
