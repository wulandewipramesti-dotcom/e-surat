<?php

namespace App\Models;

use CodeIgniter\Model;

class SpmModel extends Model
{
    protected $table = 'spm';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'nim', 'jurusan', 'tempat_magang',
        'tanggal_pengajuan', 'status'
    ];
    protected $useTimestamps = true;
}
