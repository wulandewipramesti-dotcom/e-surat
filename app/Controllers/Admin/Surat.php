<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SuratModel;
use App\Models\UserModel;

class Surat extends BaseController
{
    protected $suratModel;
     protected $UserModel;

    public function __construct()
    {
        $this->suratModel = new SuratModel();
        $this->UserModel  = new UserModel();
    }

    public function index()
    {
        $surats = $this->suratModel
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('admin/surat/index', [
            'title'  => 'Surat Masuk',
            'surats' => $surats
        ]);
    }

    public function approve($id)
    {
        $this->suratModel->update($id, [
            'status' => 'diterima'
        ]);

        return redirect()->to('/admin/surat')
            ->with('success', 'Surat berhasil diterima.');
    }

    public function reject($id)
    {
        $this->suratModel->update($id, [
            'status' => 'ditolak'
        ]);

        return redirect()->to('/admin/surat')
            ->with('error', 'Surat ditolak.');
    }

   public function detail($id)
{
    $surat = $this->suratModel->find($id);

    if (!$surat) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Surat tidak ditemukan');
    }

    $dataSurat = json_decode($surat['data_surat'], true);

    // Ambil data user berdasarkan user_id surat
    $user = $this->UserModel->find($surat['user_id']);

    return view('admin/surat/detail', [
        'title'     => 'Detail Surat',
        'surat'     => $surat,
        'dataSurat' => $dataSurat,
        'user'      => $user
    ]);
}

    public function upload($id)
    {
        $file = $this->request->getFile('file_surat');

        if ($file && $file->isValid() && !$file->hasMoved()) {

            $newName = $file->getRandomName();

            // SIMPAN KE public/uploads/surat
            $file->move(FCPATH . 'uploads/surat/', $newName);

            // UPDATE DATABASE
            $this->suratModel->update($id, [
                'file_surat' => $newName,
                'status'     => 'selesai'
            ]);

            return redirect()->back()
                ->with('success', 'File surat berhasil diupload.');
        }

        return redirect()->back()
            ->with('error', 'Gagal upload file.');
    }
}
