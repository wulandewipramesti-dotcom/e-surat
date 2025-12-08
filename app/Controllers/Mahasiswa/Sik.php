<?php
namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SikModel;

class Sik extends BaseController
{
    protected $sikModel;

    public function __construct()
    {
        $this->sikModel = new SikModel();
    }

    public function index()
    {
        $data = [
            'title'  => 'Data Surat Izin Kuliah',
            'surats' => $this->sikModel->findAll()
        ];

        return view('mahasiswa/sik/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Surat Izin Kuliah'
        ];

        return view('mahasiswa/sik/create', $data);
    }

    public function store()
    {
        $this->sikModel->insert([
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'nim'            => $this->request->getPost('nim'),
            'prodi'          => $this->request->getPost('prodi'),
            'semester'       => $this->request->getPost('semester'),
            'tahun_ajaran'   => $this->request->getPost('tahun_ajaran'),
            'tanggal_izin'   => $this->request->getPost('tanggal_izin'),
            'alasan'         => $this->request->getPost('alasan'),
            'status'         => 'Pending'
        ]);

        return redirect()->to(route_to('sik.index'))->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $sik = $this->sikModel->find($id);

        if (!$sik) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data izin tidak ditemukan');
        }

        $data = [
            'title' => 'Edit Surat Izin Kuliah',
            'sik'   => $sik
        ];

        return view('mahasiswa/sik/edit', $data);
    }

    public function update($id)
    {
        $this->sikModel->update($id, [
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'nim'            => $this->request->getPost('nim'),
            'prodi'          => $this->request->getPost('prodi'),
            'semester'       => $this->request->getPost('semester'),
            'tahun_ajaran'   => $this->request->getPost('tahun_ajaran'),
            'tanggal_izin'   => $this->request->getPost('tanggal_izin'),
            'alasan'         => $this->request->getPost('alasan')
        ]);

        return redirect()->to(route_to('sik.index'))->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->sikModel->delete($id);
        return redirect()->to(route_to('sik.index'))->with('success', 'Data berhasil dihapus.');
    }
}
