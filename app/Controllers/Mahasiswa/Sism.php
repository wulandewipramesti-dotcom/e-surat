<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SuratModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Sism extends BaseController
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
            ->where('jenis_surat', 'SISM')
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('mahasiswa/sism/index', [
            'title'  => 'Surat Izin Survey Mata Kuliah',
            'surats' => $surats
        ]);
    }

    // =========================
    // CREATE
    // =========================
    public function create()
    {
        return view('mahasiswa/sism/create', [
            'title' => 'Tambah Surat Izin Survey'
        ]);
    }

    // =========================
    // STORE
    // =========================
    public function store()
    {
        $dataSism = [
            'nama'          => $this->request->getPost('nama'),
            'nim'           => $this->request->getPost('nim'),
            'jurusan'       => $this->request->getPost('jurusan'),
            'kegiatan'      => $this->request->getPost('kegiatan'),
            'lokasi_survey' => $this->request->getPost('lokasi_survey'),
            'tanggal'       => $this->request->getPost('tanggal'),
            'waktu_mulai'   => $this->request->getPost('waktu_mulai'),
            'waktu_selesai' => $this->request->getPost('waktu_selesai'),
        ];

        $this->suratModel->insert([
            'user_id'     => session()->get('user_id'),
            'jenis_surat' => 'SISM',
            'data_surat'  => json_encode($dataSism),
            'status'      => 'pending',
            'file_surat'  => null
        ]);

        return redirect()->route('sism.index')
            ->with('success', 'Surat berhasil dikirim ke admin');
    }

    // =========================
    // EDIT (pending & ditolak)
    // =========================
    public function edit($id)
    {
        $surat = $this->suratModel->find($id);
        if (!$surat) {
            throw new PageNotFoundException('Surat tidak ditemukan');
        }

        // ❌ kunci jika sudah diproses
        if (in_array($surat['status'], ['diterima', 'selesai'])) {
            return redirect()->back()
                ->with('error', 'Surat tidak bisa diedit karena sudah diproses admin.');
        }

        $dataSism = json_decode($surat['data_surat'], true) ?? [];

        return view('mahasiswa/sism/edit', [
            'title' => 'Edit Surat Izin Survey',
            'surat' => $surat,
            'data'  => $dataSism
        ]);
    }

    // =========================
    // UPDATE (reset ke pending)
    // =========================
    public function update($id)
    {
        $surat = $this->suratModel->find($id);
        if (!$surat) {
            return redirect()->back()->with('error', 'Surat tidak ditemukan');
        }

        // ❌ kunci jika sudah diproses
        if (in_array($surat['status'], ['diterima', 'selesai'])) {
            return redirect()->back()
                ->with('error', 'Surat tidak bisa diupdate karena sudah diproses admin.');
        }

        $dataSism = json_decode($surat['data_surat'], true) ?? [];

        $dataSism['kegiatan']      = $this->request->getPost('kegiatan');
        $dataSism['lokasi_survey'] = $this->request->getPost('lokasi_survey');
        $dataSism['tanggal']       = $this->request->getPost('tanggal');
        $dataSism['waktu_mulai']   = $this->request->getPost('waktu_mulai');
        $dataSism['waktu_selesai'] = $this->request->getPost('waktu_selesai');

        $this->suratModel->update($id, [
            'data_surat' => json_encode($dataSism),
            // ⬅️ penting: kirim ulang ke admin
            'status'     => 'pending',
            'file_surat' => null
        ]);

        return redirect()->route('sism.index')
            ->with('success', 'Surat berhasil diperbarui dan dikirim ulang ke admin.');
    }

    // =========================
    // DELETE
    // =========================
    public function delete($id)
    {
        $surat = $this->suratModel->find($id);
        if (!$surat) {
            return redirect()->back()->with('error', 'Surat tidak ditemukan');
        }

        // ❌ kunci jika sudah diproses
        if (in_array($surat['status'], ['diterima', 'selesai'])) {
            return redirect()->back()
                ->with('error', 'Surat tidak bisa dihapus karena sudah diproses admin.');
        }

        $this->suratModel->delete($id);

        return redirect()->route('sism.index')
            ->with('success', 'Surat berhasil dihapus');
    }

    // =========================
    // DETAIL
    // =========================
    public function detail($id)
    {
        $surat = $this->suratModel->find($id);
        if (!$surat) {
            throw new PageNotFoundException('Surat tidak ditemukan');
        }

        $dataSism = json_decode($surat['data_surat'], true) ?? [];

        return view('mahasiswa/sism/detail', [
            'title' => 'Detail Surat Izin Survey',
            'surat' => $surat,
            'data'  => $dataSism
        ]);
    }
}
