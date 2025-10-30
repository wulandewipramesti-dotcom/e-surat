<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table = 'surat_keterangan';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'semester',
        'tahun_ajaran',
        'nama_orangtua',
        'pangkat',
        'status'
    ];
}
