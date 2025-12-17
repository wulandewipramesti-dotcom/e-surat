<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SuratModel;

class SuratKeluar extends BaseController
{
    protected $suratModel;

    public function __construct()
    {
        $this->suratModel = new SuratModel();
    }

    public function index()
    {
        $surats = $this->suratModel
            ->where('status', 'selesai')
            ->orderBy('updated_at', 'DESC')
            ->findAll();

        return view('admin/suratKeluar/index', [
            'title' => 'Surat Keluar Mahasiswa',
            'surats' => $surats
        ]);
    }
}
