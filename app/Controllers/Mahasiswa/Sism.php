<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SismModel;

class Sism extends BaseController
{
    protected $sism;

    public function __construct()
    {
        $this->sism = new SismModel();
    }

    public function index()
    {
        return view('mahasiswa/sism/index', [
            'title'  => 'Surat Izin Survey Matakuliah',
            'surats' => $this->sism->orderBy('id', 'DESC')->findAll()
        ]);
    }

    public function create()
    {
        return view('mahasiswa/sism/create', [
            'title' => 'Tambah Surat Izin Survey'
        ]);
    }

    public function store()
    {
        $this->sism->save($this->request->getPost());

        return redirect()->route('sism.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('mahasiswa/sism/edit', [
            'title' => 'Edit Surat Izin Survey',
            'surat' => $this->sism->find($id)
        ]);
    }

    public function update($id)
    {
        $this->sism->update($id, $this->request->getPost());

        return redirect()->route('sism.index')
            ->with('success', 'Data berhasil diupdate.');
    }

    public function delete($id)
    {
        $this->sism->delete($id);

        return redirect()->route('sism.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}
