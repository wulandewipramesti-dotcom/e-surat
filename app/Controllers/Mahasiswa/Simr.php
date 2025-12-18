<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SimrModel;
use Dompdf\Dompdf;

class Simr extends BaseController
{
    protected $simrModel;

    public function __construct()
    {
        $this->simrModel = new SimrModel();
    }

    // =========================
    // INDEX (LIST SURAT)
    // =========================
    public function index()
    {
        $data = [
            'title' => 'Surat Izin Meminjam Ruangan',
            'simr'  => $this->simrModel
                        ->where('user_id', session()->get('user_id'))
                        ->orderBy('id', 'DESC')
                        ->findAll()
        ];

        return view('mahasiswa/simr/index', $data);
    }

    // =========================
    // CREATE FORM
    // =========================
    public function create()
    {
        return view('mahasiswa/simr/create', [
            'title' => 'Tambah Surat SIMR'
        ]);
    }

    // =========================
    // STORE DATA
    // =========================
    public function store()
    {
        $data = [
            'user_id'       => session()->get('user_id'),
            'nama'          => session()->get('nama'),
            'nim'           => session()->get('nim'),
            'jurusan'       => session()->get('jurusan'),
            'kegiatan'      => $this->request->getPost('kegiatan'),
            'tanggal'       => $this->request->getPost('tanggal'),
            'waktu_mulai'   => $this->request->getPost('waktu_mulai'),
            'waktu_selesai' => $this->request->getPost('waktu_selesai'),
            'ruangan'       => $this->request->getPost('ruangan'),
            'status'        => 'approved'
        ];

        $this->simrModel->insert($data);
        $id = $this->simrModel->getInsertID();

        return redirect()->to('mahasiswa/simr/cetak/' . $id);
    }

    // =========================
    // CETAK PDF
    // =========================
    public function cetak($id)
    {
        $simr = $this->simrModel->find($id);

        if (!$simr) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $html = view('mahasiswa/simr/pdf', ['simr' => $simr]);

        // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portrait');
        // $dompdf->render();
        // $dompdf->stream('SIMR.pdf', ['Attachment' => false]);
    }
}
