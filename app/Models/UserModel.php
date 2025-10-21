<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password', 'name'];
    protected $useTimestamps = true;

    // Ambil user berdasarkan email
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
