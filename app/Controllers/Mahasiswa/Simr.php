<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SimrModel;
use Mpdf\Mpdf;

class Simr extends BaseController
{
    protected $simrModel;

    public function __construct()
    {
        $this->simrModel = new SimrModel();
    }

    // 🔥 LANGSUNG FORM CREATE (seperti SIK)
    public function index()
    {
        return redirect()->to(route_to('simr.create'));
    }

    // =========================
    // FORM CREATE
    // =========================
    public function create()
    {
        return view('mahasiswa/simr/create', [
            'title' => 'Surat Izin Meminjam Ruangan'
        ]);
    }

    // =========================
    // SIMPAN + TAMPILKAN PDF
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
            'status'        => 'Pending'
        ];

        // 1️⃣ Simpan ke database
        $this->simrModel->insert($data);
        $id = $this->simrModel->getInsertID();

        // 2️⃣ Ambil data terbaru
        $simr = $this->simrModel->find($id);

        // 3️⃣ Load template PDF
        $html = view('mahasiswa/simr/simr_template', [
            'simr' => $simr
        ]);

        // 4️⃣ Generate PDF
        $mpdf = new Mpdf([
            'format' => 'A4',
            'orientation' => 'P'
        ]);
        $mpdf->WriteHTML($html);

        // 5️⃣ INLINE (langsung terlihat di browser)
        return $this->response
            ->setHeader('Content-Type', 'application/pdf')
            ->setHeader(
                'Content-Disposition',
                'inline; filename="SIMR.pdf"'
            )
            ->setBody($mpdf->Output('', 'S'));
    }
}
