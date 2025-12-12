<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SpmModel;

class Spm extends BaseController
{
    protected $spm;

    public function __construct()
    {
        $this->spm = new SpmModel();
    }

    public function index()
    {
        return view('mahasiswa/spm/index', [
            'title'  => 'Surat Permohonan Magang',
            'surats' => $this->spm->orderBy('id', 'DESC')->findAll()
        ]);
    }

    public function create()
    {
        return view('mahasiswa/spm/create', [
            'title' => 'Tambah Surat Permohonan Magang'
        ]);
    }

    public function store()
    {
        $this->spm->save($this->request->getPost());
        return redirect()->route('spm.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('mahasiswa/spm/edit', [
            'title' => 'Edit Surat Permohonan Magang',
            'surat' => $this->spm->find($id)
        ]);
    }

    public function update($id)
    {
        $this->spm->update($id, $this->request->getPost());
        return redirect()->route('spm.index')->with('success', 'Data berhasil diupdate.');
    }

    public function delete($id)
    {
        $this->spm->delete($id);
        return redirect()->route('spm.index')->with('success', 'Data berhasil dihapus.');
    }
}
