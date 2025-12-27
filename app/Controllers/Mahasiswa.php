<?php

namespace App\Controllers;

use App\Models\SimrModel;
use App\Models\SpmModel;
use App\Models\SikModel;
use App\Models\SismModel;
use App\Models\SuratModel;

class Mahasiswa extends BaseController
{
    public function dashboard()
{
    $userId = session()->get('user_id');
    $nim    = session()->get('nim');
    $suratModel = new SuratModel();
    $simrModel  = new SimrModel();
    $sikModel   = new SikModel();

    $data = [
        'title' => 'Dashboard Mahasiswa',

        // dari tabel surat
        'totalSPM' => $suratModel
            ->where('user_id', $userId)
            ->where('jenis_surat', 'SPM')
            ->countAllResults(),

        'totalSKAK' => $suratModel
            ->where('user_id', $userId)
            ->where('jenis_surat', 'SKAK')
            ->countAllResults(),

        'totalSISM' => $suratModel
            ->where('user_id', $userId)
            ->where('jenis_surat', 'SISM')
            ->countAllResults(),

        // dari tabel masing-masing
        'totalSIMR' => $simrModel
            ->where('user_id', $userId)
            ->countAllResults(),

        'totalSIK' => $sikModel
            ->where('nim', $nim)
            ->countAllResults(),
    ];

    return view('dashboard_mhs', $data);
}
}