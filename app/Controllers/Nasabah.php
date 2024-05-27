<?php

namespace App\Controllers;
use App\Models\NasabahModel;
use Config\Validation;
use Config\Services;

class Nasabah extends BaseController
{
     // Session
     protected $session;
     protected $data;

     // Initialize Objects
    function __construct(){
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
        $this->data['request'] = $this->request;
    }

    public function index(): string
    {
        $nasabah = new NasabahModel();
        $data['nasabah'] = $nasabah->findAll();
        return view('nasabah/nasabah_show', $data);
    }

    public function create ()
    {
        $data['validation'] = $this->session->getFlashdata('validation');
        return view('nasabah/nasabah_add');
    }

    public function save(){
        $validation = \Config\Services::validation();
        $validationConfig = new Validation();

        $validation->setRules($validationConfig->nasabah, $validationConfig->nasabah_errors);

        if (!$this->validate($validation->getRules())) {
            $this->session->setFlashdata('validation', $validation);
            return redirect()->to('/nasabah/create')->withInput();
        }

        $nasabah = new NasabahModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'total_sampah' => $this->request->getPost('total_sampah')
        ];

        $nasabah->save($data);
        session()->setFlashdata('pesan', 'Nasabah berhasil ditambahkan');
        return redirect()->to('/nasabah');
    }

    public function edit($id)
    {
        $nasabah = new NasabahModel();
        $data['nasabah'] = $nasabah->find($id);

        $data['validation'] = $this->session->getFlashdata('validation');
        return view('nasabah/nasabah_update', $data);
    }

    public function update($id){
        $validation = \Config\Services::validation();
        $validationConfig = new Validation();

        $validation->setRules($validationConfig->nasabah, $validationConfig->nasabah_errors);

        if (!$this->validate($validation->getRules())) {
            $this->session->setFlashdata('validation', $validation);
            return redirect()->to('/nasabah/edit/' .$id)->withInput();
        }

        $nasabah = new NasabahModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'total_sampah' => $this->request->getPost('total_sampah')
        ];

        session()->setFlashdata('pesan', 'Nasabah berhasil diubah');
        $nasabah->update($id, $data);
        return redirect()->to('/nasabah');
    }

    public function delete($id){
        $nasabah = new NasabahModel();
        $nasabah->delete($id);

        $this->resetAutoIncrement();

        session()->setFlashdata('pesan', 'Nasabah berhasil dihapus');
        return redirect()->to('/nasabah');
    }

    private function resetAutoIncrement(){
        $db = \Config\Database::connect();
        $query = $db->query("ALTER TABLE nasabah AUTO_INCREMENT = 1");
    }
}
