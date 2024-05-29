<?php

namespace App\Controllers;
use App\Models\SampahModel;

class Sampah extends BaseController
{

    // Session
    protected $session;
    // Data
    protected $data;
    protected $sampah_model;

    // Initialize Objects
    function __construct(){
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
        $this->data['request'] = $this->request;
        $this->sampah_model = new SampahModel();
    }


    public function index(): string
    {
        $this->data['title'] = "Daftar Sampah";
        $this->data['sampah'] = $this->sampah_model->getAll();
        return view('sampah/sampah_show', $this->data);
    }

    public function create()
    {
        $this->data['title'] = "Tambah Data Sampah";
        return view('sampah/sampah_add', $this->data);
    }

    public function update($id_sampah = '')
    {
        $this->data['title'] = "Ubah Data Sampah";
        if(empty($id_sampah)){
            $this->session->setFlashdata('error','Tidak dapat menemukan data sampah!') ;
            return redirect()->to('/sampah');
        }
        $this->data['sampah'] = $this->sampah_model->getAllWhereId($id_sampah);
        return view('sampah/sampah_update', $this->data);
    }

    public function save()
    {
        if(!empty($this->request->getPost('id_sampah'))){
            if (!$this->validate([
                'kode' => [
                    'rules' => 'required|min_length[5]|max_length[6]|is_unique[sampah.kode,sampah.id_sampah,'.$this->request->getPost('id_sampah').']',
                    'errors' => [
                        'required' => 'Kode Sampah harus diisi',
                        'min_length' => 'Panjang kode sampah adalah 5-6 karakter',
                        'max_length' => 'Panjang kode sampah adalah 5-6 karakter',
                        'is_unique' => 'Sampah sudah ada'
                    ]
                    ],

                    'item' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama sampah harus diisi'
                        ]
                    ],

                    'harga' => [
                        'rules' => 'required|numeric',
                        'errors' => [
                            'required' => 'Harga sampah harus diisi',
                            'numeric' => 'Harga sampah hanya dapat diisi dengan angka'

                        ]
                    ],
                ]
                )) {
                $this->session->setFlashdata('error', $this->validator->listErrors());
                return redirect()->to('sampah/update/' . $this->request->getPost('id_sampah'))->withInput();
            }
            $post = [             
                'item' => $this->request->getPost('item'),
                'kode' => $this->request->getPost('kode'),
                'harga' => $this->request->getPost('harga')
            ];
            $save = $this->sampah_model->where(['id_sampah'=>$this->request->getPost('id_sampah')])->set($post)->update();
        }else{
            if (!$this->validate([
                'kode' => [
                    'rules' => 'required|min_length[5]|max_length[6]|is_unique[sampah.kode]',
                    'errors' => [
                        'required' => 'Kode Sampah harus diisi',
                        'min_length' => 'Panjang kode sampah adalah 5-6 karakter',
                        'max_length' => 'Panjang kode sampah adalah 5-6 karakter',
                        'is_unique' => 'Sampah sudah ada'
                    ]
                    ],

                    'item' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama sampah harus diisi'
                        ]
                    ],

                    'harga' => [
                        'rules' => 'required|numeric',
                        'errors' => [
                            'required' => 'Harga sampah harus diisi',
                            'numeric' => 'Harga sampah hanya dapat diisi dengan angka'

                        ]
                    ],
                ]
                )) {
                $this->session->setFlashdata('error', $this->validator->listErrors());
                return redirect()->to('sampah/create')->withInput();
            }
            $post = [             
                'item' => $this->request->getPost('item'),
                'kode' => $this->request->getPost('kode'),
                'harga' => $this->request->getPost('harga')
            ];
            $save = $this->sampah_model->insert($post);}
        if($save){
            if(!empty($this->request->getPost('id_sampah')))
                $this->session->setFlashdata('success','Data sampah berhasil diperbarui') ;
            else
                $this->session->setFlashdata('success','Data sampah berhasil disimpan') ;
                $id =!empty($this->request->getPost('id_sampah')) ? $this->request->getPost('id_sampah') : $save;
                return redirect()->to('sampah');
        }else{
            if(!empty($this->request->getPost('id_sampah')))
                $this->session->setFlashdata('error','Data sampah gagal diperbarui') ;
            else
                $this->session->setFlashdata('errpr','Data sampah gagal disimpan') ;
                return redirect()->to('sampah');
            // return view('sampah/create', $this->data);
        }
    }

    public function delete($id_sampah = '')
    {
        if(empty($id_sampah)){
            $this->session->setFlashdata('error','Sampah tidak ditemukan') ;
            return redirect()->to('/sampah');
        }
        $delete = $this->sampah_model->delete($id_sampah);
        if($delete){
            $this->session->setFlashdata('success','Data sampah berhasil dihapus.') ;
            return redirect()->to('/sampah');
        }
    }
}
