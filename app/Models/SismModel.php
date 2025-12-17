<?php

namespace App\Models;

use CodeIgniter\Model;

class SismModel extends Model
{
    protected $table      = 'sism';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id','nama', 'nim', 'jurusan', 'kegiatan', 'lokasi_survey',
        'tanggal', 'waktu_mulai', 'waktu_selesai', 'status'
    ];

    protected $useTimestamps = true;
}
