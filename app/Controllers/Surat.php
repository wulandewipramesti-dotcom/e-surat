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

    // Halaman daftar surat
    public function index()
    {
        $userId = session()->get('id'); // ID mahasiswa yang login
        $data = [
            'title' => 'Surat Keterangan Kuliah',
            'menuMahasiswaSurat' => 'active',
            'surats' => $this->suratModel->where('user_id', $userId)->findAll()
        ];

        return view('mahasiswa/surat/index', $data);
    }

    // Halaman form tambah surat
    public function create()
    {
        $data = [
            'title' => 'Tambah Surat Keterangan Kuliah'
        ];

        return view('mahasiswa/surat/create', $data);
    }
   

    // Simpan data surat baru
    public function store()
    {
        $userId = session()->get('id');
        dd($userId);

        $this->suratModel->insert([
            'user_id' => session()->get('id'), // ID mahasiswa yang login
            'semester' => $this->request->getPost('semester'),
            'tahun_ajaran' => $this->request->getPost('tahun_ajaran'),
            'nama_orangtua' => $this->request->getPost('nama_orangtua'),
            'pangkat' => $this->request->getPost('pangkat'),
            'status' => 'pending' // otomatis menunggu persetujuan admin
        ]);

        session()->setFlashdata('success', 'Surat berhasil ditambahkan!');
        return redirect()->to(route_to('surat.index'));
    }
}
