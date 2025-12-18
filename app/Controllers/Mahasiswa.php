<?php

namespace App\Controllers;

use App\Models\SimrModel;
use App\Models\SpmModel;
use App\Models\SkakModel;
use App\Models\SismModel;

class Mahasiswa extends BaseController
{
    public function dashboard()
    {
        $userId = session()->get('user_id');

        $simrModel = new SimrModel();
        $spmModel  = new SpmModel();
        $sismModel = new SismModel();

        $data = [
            'title'      => 'Dashboard Mahasiswa',
            'totalSIMR'  => $simrModel->where('user_id', $userId)->countAllResults(),
            'totalSPM'   => $spmModel->where('user_id', $userId)->countAllResults(),
            'totalSISM'  => $sismModel->where('user_id', $userId)->countAllResults(),
        ];

        return view('dashboard_mhs', $data);
    }
}
