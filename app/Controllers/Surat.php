<?php

namespace App\Controllers;

use App\Models\SuratModel;

class Surat extends BaseController
{
    protected $suratModel;

    public function __construct()
    {
        $this->suratModel = new SuratModel();
    }

    // READ
    public function index()
    {
        $data = [
            'title' => 'Data Surat Keterangan Kuliah',
            'surats' => $this->suratModel->findAll()
        ];

        return view('mahasiswa/surat/index', $data);
    }

    // CREATE FORM
    public function create()
    {
        $data = [
            'title' => 'Tambah Surat'
        ];

        return view('mahasiswa/surat/create', $data);
    }

   // STORE
public function store()
{
    $this->suratModel->insert([
        'semester' => $this->request->getPost('semester'),
        'tahun_ajaran' => $this->request->getPost('tahun_ajaran'),
        'nama_orangtua' => $this->request->getPost('nama_orangtua'),
        'pangkat' => $this->request->getPost('pangkat'),
        'status' => 'pending'
    ]);

    session()->setFlashdata('success', 'Data berhasil ditambahkan!');
    return redirect()->to('/surat');
}

// EDIT FORM
public function edit($id)
{
    $surat = $this->suratModel->find($id);

    if (!$surat) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Surat dengan ID $id tidak ditemukan");
    }

    $data = [
        'title' => 'Edit Surat',
        'surat' => $surat
    ];

    return view('mahasiswa/surat/edit', $data);
}


// UPDATE
public function update($id)
{
    $this->suratModel->update($id, [
        'nama_orangtua' => $this->request->getPost('nama_orangtua'),
        'pangkat' => $this->request->getPost('pangkat'),
        'semester' => $this->request->getPost('semester'),
        'tahun_ajaran' => $this->request->getPost('tahun_ajaran'),
    ]);

    session()->setFlashdata('success', 'Data berhasil diperbarui!');
    return redirect()->to('/surat');
}

// DELETE
public function delete($id)
{
    $this->suratModel->delete($id);
    session()->setFlashdata('success', 'Data berhasil dihapus!');
    return redirect()->to('/surat');
}

}