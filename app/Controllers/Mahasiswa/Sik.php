<?php

namespace App\Controllers\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\SikModel;
use Mpdf\Mpdf;

class Sik extends BaseController
{
    protected $sikModel;

    public function __construct()
    {
        $this->sikModel = new SikModel();
    }

    public function create()
    {
        return view('mahasiswa/sik/create', [
            'title' => 'Surat Izin Kuliah'
        ]);
    }

    // 🔥 SUBMIT → LANGSUNG PDF INLINE
    public function store()
    {
        $data = [
            'user_id'        => session()->get('user_id'),
            'nama_mahasiswa' => session()->get('nama'),
            'nim'            => session()->get('nim'),
            'prodi'          => $this->request->getPost('prodi'),
            'semester'       => $this->request->getPost('semester'),
            'tahun_ajaran'   => $this->request->getPost('tahun_ajaran'),
            'tanggal_izin'   => $this->request->getPost('tanggal_izin'),
            'alasan'         => $this->request->getPost('alasan'),
        ];


        // 1️⃣ Simpan ke DB
        $this->sikModel->insert($data);

        // 2️⃣ Ambil ID
        $id = $this->sikModel->getInsertID();
        $surat = $this->sikModel->find($id);

        // 3️⃣ HTML → PDF
        $html = view('mahasiswa/sik/sik_template', [
            'surat' => $surat
        ]);

        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);

        // 4️⃣ INLINE VIEW
        return $this->response
            ->setHeader('Content-Type', 'application/pdf')
            ->setHeader(
                'Content-Disposition',
                'inline; filename="Surat_Izin_Kuliah.pdf"'
            )
            ->setBody($mpdf->Output('', 'S'));
    }
}
