<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SuratModel;

class Home extends BaseController
{
    public function index()
    {
        // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(route_to('login'));
        }

        $userModel  = new UserModel();
        $suratModel = new SuratModel();

        // // Hitung user
        $totalAdmin = $userModel
        ->where('role', 'admin')
        ->countAllResults();


        // Hitung data
        $totalUsers = $userModel
            ->where('role', 'mahasiswa')
            ->countAllResults();

        // Surat Masuk = pending
        $totalSuratMasuk = $suratModel
            ->where('status', 'pending')
            ->countAllResults();

        // Surat Keluar = selesai
        $totalSuratKeluar = $suratModel
            ->where('status', 'selesai')
            ->countAllResults();

        // Data ke view
        $data = [
            'title'             => 'Dashboard',
            'nama'              => session()->get('nama'),
            'role'              => session()->get('role'),
            'totalAdmin'       => $totalAdmin,
            'totalUsers'        => $totalUsers,
            'totalSuratMasuk'   => $totalSuratMasuk,
            'totalSuratKeluar'  => $totalSuratKeluar,
        ];

        return view('home', $data);
    }
}
