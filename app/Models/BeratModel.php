<?php

namespace App\Models;

use CodeIgniter\Model;

class BeratModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'berat_sementara';
    protected $primaryKey       = 'berat';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['berat'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

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

    public function getBerat()
    {
        return $this->select('berat')->first();
    }

    public function resetBerat()
    {
        $this->set('berat', '0')
         ->where('id_berat', 1)
         ->update();
    }
}