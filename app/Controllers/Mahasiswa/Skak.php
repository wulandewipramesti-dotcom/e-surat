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

    public function index()
    {
        $data = [
            'title'  => 'Data Surat Keterangan Aktif Kuliah',
            'surats' => $this->suratModel->findAll()
        ];

        return view('mahasiswa/skak/index', $data);
    }

    public function create()
    {
        $data = ['title' => 'Tambah Surat Keterangan Aktif Kuliah'];
        return view('mahasiswa/skak/create', $data);
    }

    public function store()
    {
        $this->suratModel->insert([
            'nama_orangtua' => $this->request->getPost('nama_orangtua'),
            'pangkat'       => $this->request->getPost('pangkat'),
            'semester'      => $this->request->getPost('semester'),
            'tahun_ajaran'  => $this->request->getPost('tahun_ajaran'),
            'status'        => 'Pending',
        ]);

        return redirect()->to(route_to('skak.index'))->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $surat = $this->suratModel->find($id);
        if (!$surat) throw new \CodeIgniter\Exceptions\PageNotFoundException('Surat tidak ditemukan');

        $data = [
            'title' => 'Edit Surat Keterangan Aktif Kuliah',
            'surat' => $surat
        ];

        return view('mahasiswa/skak/edit', $data);
    }

    public function update($id)
    {
        $this->suratModel->update($id, [
            'nama_orangtua' => $this->request->getPost('nama_orangtua'),
            'pangkat'       => $this->request->getPost('pangkat'),
            'semester'      => $this->request->getPost('semester'),
            'tahun_ajaran'  => $this->request->getPost('tahun_ajaran'),
        ]);

        return redirect()->to(route_to('skak.index'))->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->suratModel->delete($id);
        return redirect()->to(route_to('skak.index'))->with('success', 'Data berhasil dihapus.');
    }
}
