<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SuratModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Skak extends BaseController
{
    protected $suratModel;

    public function __construct()
    {
        $this->suratModel = new SuratModel();
    }

    // =========================
    // INDEX
    // =========================
    public function index()
    {
        return view('mahasiswa/skak/index', [
            'title'  => 'Data Surat Keterangan Aktif Kuliah',
            'surats' => $this->suratModel
                ->where('user_id', session()->get('user_id'))
                ->orderBy('created_at', 'DESC')
                ->findAll()
        ]);
    }

    // =========================
    // CREATE
    // =========================
    public function create()
    {
        return view('mahasiswa/skak/create', [
            'title' => 'Tambah Surat Keterangan Aktif Kuliah'
        ]);
    }

    // =========================
    // STORE
    // =========================
    public function store()
    {
        $dataSurat = [
            'nama_orangtua' => $this->request->getPost('nama_orangtua'),
            'pangkat'       => $this->request->getPost('pangkat'),
            'semester'      => $this->request->getPost('semester'),
            'tahun_ajaran'  => $this->request->getPost('tahun_ajaran'),
        ];

        $this->suratModel->insert([
            'user_id'     => session()->get('user_id'),
            'jenis_surat' => 'skak',
            'data_surat'  => json_encode($dataSurat),
            'status'      => 'pending'
        ]);

        return redirect()->to(route_to('skak.index'))
            ->with('success', 'Surat berhasil dikirim ke admin');
    }

    // =========================
    // EDIT
    // =========================
   public function edit($id)
{
    $surat = $this->suratModel->find($id);

    if (!$surat) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
    }

    // Decode JSON data_surat
    $dataSurat = json_decode($surat['data_surat'], true) ?? [];

    return view('mahasiswa/skak/edit', [
        'title' => 'Edit Surat Keterangan Aktif Kuliah',
        'surat' => $surat,
        'data'  => $dataSurat
    ]);
}

public function update($id)
{
    $dataSurat = [
        'nama_orangtua' => $this->request->getPost('nama_orangtua'),
        'pangkat'       => $this->request->getPost('pangkat'),
        'semester'      => $this->request->getPost('semester'),
        'tahun_ajaran'  => $this->request->getPost('tahun_ajaran'),
    ];

    $this->suratModel->update($id, [
        'data_surat' => json_encode($dataSurat),
        'status'     => 'pending' // reset ke pending setelah edit
    ]);

    return redirect()
        ->to(route_to('skak.index'))
        ->with('success', 'Surat berhasil diperbarui');
}

    // =========================
    // DELETE
    // =========================
    public function delete($id)
    {
        $surat = $this->suratModel->find($id);

        if (!$surat) {
            throw new PageNotFoundException('Surat tidak ditemukan');
        }

        if ($surat['status'] !== 'pending') {
            return redirect()->to(route_to('skak.index'))
                ->with('error', 'Surat tidak dapat dihapus');
        }

        $this->suratModel->delete($id);

        return redirect()->to(route_to('skak.index'))
            ->with('success', 'Surat berhasil dihapus');
    }
}
