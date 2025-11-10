<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard Mahasiswa'
        ];

        return view('dashboard_mhs', $data);
    }
}
