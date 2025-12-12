<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SimrModel;

class Simr extends BaseController
{
    protected $simrModel;

    public function __construct()
    {
        $this->simrModel = new SimrModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Surat Izin Meminjam Ruangan',
            'surats' => $this->simrModel->findAll()
        ];
        return view('mahasiswa/simr/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Surat Izin';
        return view('mahasiswa/simr/create', $data);
    }

    public function store()
    {
        $this->simrModel->save([
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),            'kegiatan' => $this->request->getPost('kegiatan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_mulai' => $this->request->getPost('waktu_mulai'),
            'waktu_selesai' => $this->request->getPost('waktu_selesai'),
            'ruangan' => $this->request->getPost('ruangan'),
            'status' => 'pending'
        ]);

        return redirect()->route('simr.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Surat Izin',
            'surat' => $this->simrModel->find($id)
        ];
        return view('mahasiswa/simr/edit', $data);
    }

    public function update($id)
    {
        $this->simrModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),
            'kegiatan' => $this->request->getPost('kegiatan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_mulai' => $this->request->getPost('waktu_mulai'),
            'waktu_selesai' => $this->request->getPost('waktu_selesai'),
            'ruangan' => $this->request->getPost('ruangan'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->route('simr.index')->with('success', 'Data berhasil diupdate.');
    }

    public function delete($id)
    {
        $this->simrModel->delete($id);
        return redirect()->route('simr.index')->with('success', 'Data berhasil dihapus.');
    }
}
