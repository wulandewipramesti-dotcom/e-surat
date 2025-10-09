<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $data = [
        ['id' => 1, 'name' => 'bunga', 'description' => 'Description for bunga'],
        ['id' => 2, 'name' => 'mawar', 'description' => 'Description for mawar'],
        ['id' => 3, 'name' => 'matahari', 'description' => 'Description for matahari'],
    ];

    public function getAll(): array
    {
        return $this->data;
    }
}