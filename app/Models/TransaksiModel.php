<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'transaksi';
    protected $primaryKey       = 'id_transaksi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_transaksi', 'berat', 'total_harga', 'id_sampah', 'id_nasabah'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getTransaksiNasabah()
    {
        return $this->select('id_transaksi,
                            berat,
                            total_harga,
                            transaksi.created_at,
                            transaksi.id_sampah,
                            transaksi.id_nasabah,
                            sampah.item as jenis_sampah')
                    ->join('nasabah', 'nasabah.id_nasabah=transaksi.id_nasabah')
                    ->join('sampah', 'sampah.id_sampah=transaksi.id_sampah')
                    ->findAll();
    }

    public function getLastTransaksiNasabah($id)
    {
        return $this->orderBy('created_at', 'DESC')->where(['transaksi.id_nasabah'=>$id])->first();
    }
}