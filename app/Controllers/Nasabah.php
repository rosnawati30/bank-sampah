<?php

namespace App\Controllers;
use App\Models\NasabahModel;
use Config\Validation;
use Config\Services;

class Nasabah extends BaseController
{
    public function index(): string
    {
        $nasabah = new NasabahModel();
        $data['nasabah'] = $nasabah->findAll();
        return view('nasabah/nasabah_show', $data);
    }

    public function create ()
    {
        return view('nasabah/nasabah_add');
    }

    public function save(){
        $validation = Services::validation();
        $validationConfig = new Validation();

        $validation->setRules($validationConfig->nasabah, $validationConfig->nasabah_errors);

        if (!$this->validate($validation->getRules())) {
            return view('nasabah/nasabah_add', [
                'validation' => $validation
            ]);
        }

        $nasabah = new NasabahModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'total_sampah' => $this->request->getPost('total_sampah')
        ];

        $nasabah->save($data);
        return redirect()->to('/nasabah');
    }

    public function detail($id)
    {
        $nasabah = new NasabahModel();
        $data['nasabah'] = $nasabah->find($id);

        return view('nasabah/nasabah_detail', $data);
    }

    public function edit($id)
    {
        $nasabah = new NasabahModel();
        $data['nasabah'] = $nasabah->find($id);

        return view('nasabah/nasabah_update', $data);
    }

    public function update($id){
        $validation = \Config\Services::validation();
        $validationConfig = new Validation();

        $validation->setRules($validationConfig->nasabah, $validationConfig->nasabah_errors);

        if (!$this->validate($validation->getRules())) {
            return view('nasabah/nasabah_add', [
                'validation' => $validation
            ]);
        }

        $nasabah = new NasabahModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'total_sampah' => $this->request->getPost('total_sampah')
        ];

        $nasabah->update($id, $data);
        return redirect()->to('/nasabah');
    }

    public function delete($id){
        $nasabah = new NasabahModel();
        $nasabah->delete($id);

        $this->resetAutoIncrement();

        return redirect()->to('/nasabah');
    }

    private function resetAutoIncrement(){
        $db = \Config\Database::connect();
        $query = $db->query("ALTER TABLE nasabah AUTO_INCREMENT = 1");
    }
}
