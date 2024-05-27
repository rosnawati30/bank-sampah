<?php namespace App\Models;

use CodeIgniter\Model;

class NasabahModel extends Model{
    protected $table = 'nasabah';
    protected $primaryKey = 'id_nasabah';
    protected $allowedFields = [
        'nama',
        'alamat',
        'total_sampah',
        'created_at'
    ];

    // public function updateNasabah($id, $data){
    //     return $this->where('id_nasabah', $id)->set($data)->update();
    // }
}

?>