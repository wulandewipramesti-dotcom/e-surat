<?php
namespace App\Models;

use CodeIgniter\Model;

class SikModel extends Model
{
    protected $table = 'sik';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nim',
        'nama_mahasiswa',
        'prodi',
        'semester',
        'tahun_ajaran',
        'tanggal_izin',
        'alasan',
        'status'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
