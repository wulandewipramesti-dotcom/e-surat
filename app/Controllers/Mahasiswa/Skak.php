<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SuratModel;

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
        $surats = $this->suratModel
            ->where('user_id', session()->get('user_id'))
            ->where('jenis_surat', 'SKAK')
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('mahasiswa/skak/index', [
            'title'  => 'Surat Keterangan Aktif Kuliah',
            'surats' => $surats
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
            'nama'          => session()->get('nama'),
            'nim'           => session()->get('nim'),
            'jurusan'       => session()->get('jurusan'),
            'nama_orangtua' => $this->request->getPost('nama_orangtua'),
            'pangkat'       => $this->request->getPost('pangkat'),
            'semester'      => $this->request->getPost('semester'),
            'tahun_ajaran'  => $this->request->getPost('tahun_ajaran'),
        ];

        $this->suratModel->insert([
            'user_id'     => session()->get('user_id'),
            'jenis_surat' => 'SKAK',
            'data_surat'  => json_encode($dataSurat),
            'status'      => 'pending',
            'file_surat'  => null
        ]);

        return redirect()->route('skak.index')
            ->with('success', 'Surat berhasil dikirim ke akademik');
    }

    // =========================
    // EDIT
    // =========================
    public function edit($id)
    {
        $surat = $this->suratModel->find($id);
        if (!$surat) return redirect()->back()->with('error', 'Surat tidak ditemukan.');

        if (!in_array($surat['status'], ['pending', 'ditolak'])) {
            return redirect()->back()->with('error', 'Surat tidak bisa diedit.');
        }

        return view('mahasiswa/skak/edit', [
            'title' => 'Edit Surat Keterangan Aktif Kuliah',
            'surat' => $surat,
            'data'  => json_decode($surat['data_surat'], true) ?? []
        ]);
    }

    // =========================
    // UPDATE
    // =========================
    public function update($id)
    {
        $surat = $this->suratModel->find($id);
        if (!$surat) return redirect()->back()->with('error', 'Surat tidak ditemukan.');

        if (!in_array($surat['status'], ['pending', 'ditolak'])) {
            return redirect()->back()->with('error', 'Data tidak bisa diupdate.');
        }

        $data = json_decode($surat['data_surat'], true) ?? [];

        $data['nama_orangtua'] = $this->request->getPost('nama_orangtua');
        $data['pangkat']       = $this->request->getPost('pangkat');
        $data['semester']      = $this->request->getPost('semester');
        $data['tahun_ajaran']  = $this->request->getPost('tahun_ajaran');

        $this->suratModel->update($id, [
            'data_surat' => json_encode($data),
            'status'     => 'pending'
        ]);

        return redirect()->route('skak.index')
            ->with('success', 'Surat berhasil diperbarui.');
    }

    // =========================
    // DETAIL
    // =========================
    public function detail($id)
    {
        $surat = $this->suratModel->find($id);
        if (!$surat) return redirect()->back()->with('error', 'Surat tidak ditemukan.');

        return view('mahasiswa/skak/detail', [
            'title' => 'Detail Surat Keterangan Aktif Kuliah',
            'surat' => $surat,
            'data'  => json_decode($surat['data_surat'], true) ?? []
        ]);
    }

    // =========================
    // DELETE
    // =========================
    public function delete($id)
    {
        $surat = $this->suratModel->find($id);
        if (!$surat || $surat['status'] !== 'pending') {
            return redirect()->back()->with('error', 'Surat tidak dapat dihapus.');
        }

        $this->suratModel->delete($id);

        return redirect()->route('skak.index')
            ->with('success', 'Surat berhasil dihapus.');
    }
}
