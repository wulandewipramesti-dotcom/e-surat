<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table      = 'surat'; // pastikan tabel ini ada di DB
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_orangtua',
        'pangkat',
        'semester',
        'tahun_ajaran',
        'status'
    ];
}
