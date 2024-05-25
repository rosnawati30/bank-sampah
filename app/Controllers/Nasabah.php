<?php

namespace App\Controllers;
use App\Models\NasabahModel;

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
        $nasabah = new NasabahModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'total_sampah' => $this->request->getPost('total_sampah')
        ];
        $nasabah->save($data);
        return redirect()->to('nasabah');
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
        $nasabah = new NasabahModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'total_sampah' => $this->request->getPost('total_sampah')
        ];

        $nasabah->updateNasabah($id, $data);
        return redirect()->to('nasabah');
    }

    public function delete($id){
        $nasabah = new NasabahModel();
        $nasabah->delete($id);

        return redirect()->to('nasabah');
    }
}
