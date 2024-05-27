<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class SampahModel extends Model
{

    protected $DBGroup          = 'default';
    protected $table            = 'sampah';
    protected $primaryKey       = 'id_sampah';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    // allowed fields to manage
    protected $allowedFields = ['item', 'kode', 'harga'];

  // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

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


    function getAll(){
        $builder = $this->db->table('sampah');
        $query = $builder->get();
        return $query->getResult();
    }

    function getId(){
        $builder = $this->db->table('sampah');
        $builder->select('id_sampah');
        $query = $builder->get();
        return $query->getResult();
    }

    function getAllWhereId($id_sampah){
        $builder = $this->db->table('sampah');
        $builder->select('*')
                ->where('id_sampah', $id_sampah);
        $query = $builder->get();
        return $query->getRowArray();
        // var_dump($query->getRowArray());
    }
}