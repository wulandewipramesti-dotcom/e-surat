<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SuratModel;

class Spm extends BaseController
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
        $surats = $this->suratModel
            ->where('user_id', session()->get('user_id'))
            ->where('jenis_surat', 'SPM')
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('mahasiswa/spm/index', [
            'title'  => 'Surat Permohonan Magang',
            'surats' => $surats
        ]);
    }

    // =========================
    // CREATE
    // =========================
    public function create()
    {
        return view('mahasiswa/spm/create', [
            'title' => 'Tambah Surat Permohonan Magang'
        ]);
    }

    // =========================
    // STORE
    // =========================
    public function store()
    {
        $dataSPM = [
            'nama'              => session()->get('nama'),
            'nim'               => session()->get('nim'),
            'jurusan'           => session()->get('jurusan'),
            'tempat_magang'     => $this->request->getPost('tempat_magang'),
            'tanggal_pengajuan' => $this->request->getPost('tanggal_pengajuan')
        ];

        $this->suratModel->insert([
            'user_id'     => session()->get('user_id'),
            'jenis_surat' => 'SPM',
            'data_surat'  => json_encode($dataSPM),
            'status'      => 'pending',
            'file_surat'  => null
        ]);

        return redirect()->route('spm.index')
                         ->with('success', 'Surat berhasil dikirim ke admin');
    }

    // =========================
    // EDIT
    // =========================
    public function edit($id)
{
    $surat = $this->suratModel->find($id);
    if (!$surat) return redirect()->back()->with('error', 'Surat tidak ditemukan.');

    // Mahasiswa bisa edit jika status pending atau ditolak
    if(!in_array($surat['status'], ['pending', 'ditolak'])) {
        return redirect()->back()->with('error', 'Surat tidak bisa diedit.');
    }

    $dataSPM = json_decode($surat['data_surat'], true) ?? [];

    return view('mahasiswa/spm/edit', [
        'title' => 'Edit Surat Permohonan Magang',
        'surat' => $surat,
        'data'  => $dataSPM
    ]);
}

    // =========================
    // UPDATE
    // =========================
    public function update($id)
{
    $surat = $this->suratModel->find($id);
    if (!$surat) return redirect()->back()->with('error', 'Surat tidak ditemukan.');

    // Mahasiswa bisa update jika status pending atau ditolak
    if(!in_array($surat['status'], ['pending', 'ditolak'])) {
        return redirect()->back()->with('error', 'Data tidak bisa diupdate.');
    }

    $dataSPM = json_decode($surat['data_surat'], true) ?? [];
    $dataSPM['jurusan']           = $this->request->getPost('jurusan');
    $dataSPM['tempat_magang']     = $this->request->getPost('tempat_magang');
    $dataSPM['tanggal_pengajuan'] = $this->request->getPost('tanggal_pengajuan');

    $this->suratModel->update($id, [
        'data_surat' => json_encode($dataSPM),
        'status'     => 'pending' // optional: reset status ke pending saat edit ulang
    ]);

    return redirect()->route('spm.index')->with('success', 'Data berhasil diupdate.');
}

    // =========================
    // DELETE
    // =========================
    public function delete($id)
    {
        $this->suratModel->delete($id);
        return redirect()->route('spm.index')->with('success', 'Surat berhasil dihapus');
    }

    // =========================
    // DETAIL
    // =========================
    public function detail($id)
    {
        $surat = $this->suratModel->find($id);
        if (!$surat) return redirect()->back()->with('error', 'Surat tidak ditemukan.');

        $dataSPM = json_decode($surat['data_surat'], true) ?? [];

        return view('mahasiswa/spm/detail', [
            'title' => 'Detail Surat Permohonan Magang',
            'surat' => $surat,
            'data'  => $dataSPM
        ]);
    }
}
