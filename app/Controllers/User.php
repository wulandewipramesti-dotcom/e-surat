<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data User' // bisa kamu ubah sesuai kebutuhan
        ];
        return view('admin/index', $data);
    }
}