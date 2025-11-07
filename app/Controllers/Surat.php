<?php

namespace App\Controllers;

use App\Models\SuratModel;
use CodeIgniter\Controller;

class Surat extends BaseController
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

        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Surat Keterangan Aktif Kuliah'
        ];

        return view('mahasiswa/create', $data);
    }

    public function store()
    {
        $this->suratModel->insert([
            'nama_orangtua' => $this->request->getPost('nama_orangtua'),
            'pangkat'       => $this->request->getPost('pangkat'),
            'semester'      => $this->request->getPost('semester'),
            'tahun_ajaran'  => $this->request->getPost('tahun_ajaran'),
            'status'        => 'Menunggu',
        ]);

        return redirect()->to(route_to('surat.index'))->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $surat = $this->suratModel->find($id);

        if (!$surat) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Surat tidak ditemukan');
        }

        $data = [
            'title' => 'Edit Surat Keterangan Aktif Kuliah',
            'surat' => $surat
        ];

        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $this->suratModel->update($id, [
            'nama_orangtua' => $this->request->getPost('nama_orangtua'),
            'pangkat'       => $this->request->getPost('pangkat'),
            'semester'      => $this->request->getPost('semester'),
            'tahun_ajaran'  => $this->request->getPost('tahun_ajaran'),
        ]);

        return redirect()->to(route_to('surat.index'))->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->suratModel->delete($id);
        return redirect()->to(route_to('surat.index'))->with('success', 'Data berhasil dihapus.');
    }
}
