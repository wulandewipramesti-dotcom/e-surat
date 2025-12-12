<?php

namespace App\Models;

use CodeIgniter\Model;

class SimrModel extends Model
{
    protected $table = 'simr';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'nim', 'jurusan', 'kegiatan', 
        'tanggal', 'waktu_mulai', 'waktu_selesai', 'ruangan', 'status'
    ];
}
