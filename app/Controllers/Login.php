<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view('auth/login');
    }

    public function loginProses()
    {
        $session   = session();
        $userModel = new UserModel();

        $email    = trim($this->request->getVar('email'));
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {

            // =========================
            // SET SESSION
            // =========================
            $sessionData = [
                'user_id'    => $user['id'],
                'nama'       => $user['nama'],
                'nim'        => $user['nim'],
                'jurusan'    => $user['jurusan'],
                'email'      => $user['email'],
                'role'       => $user['role'],
                'isLoggedIn' => true
            ];
            $session->set($sessionData);

            // =========================
            // PESAN SUKSES LOGIN
            // =========================
           $session->setFlashdata(
        'success',
        'Selamat datang, ' . $user['nama']
    );

            // =========================
            // REDIRECT SESUAI ROLE
            // =========================
            if ($user['role'] === 'admin') {
                return redirect()->to('/admin');
            } elseif ($user['role'] === 'mahasiswa') {
                return redirect()->to('/dashboard_mhs');
            } else {
                return redirect()->to('/login')
                    ->with('error', 'Role tidak dikenali.');
            }

        } else {
            session()->setFlashdata(
                'error',
                'Email atau password salah!'
            );
            return redirect()->to('/login');
        }
    }

    public function logout()
{
    session()->setFlashdata(
        'success',
        'Anda berhasil logout'
    );

    session()->remove([
        'user_id',
        'nama',
        'nim',
        'jurusan',
        'email',
        'role',
        'isLoggedIn'
    ]);

    return redirect()->to('/');
}

}