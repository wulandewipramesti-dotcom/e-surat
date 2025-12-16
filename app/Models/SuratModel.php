<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'jenis_surat',
        'data_surat',
        'status',
        'file_surat'
    ];

    protected $useTimestamps = true;
}
