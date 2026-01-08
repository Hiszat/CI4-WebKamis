<?php
namespace App\Models;
use CodeIgniter\Model;
class AnggotaModel extends Model {
    protected $table = 'anggota';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'alamat', 'telp'];

    public function getAnggota() {
        return $this->findAll();
    }
}