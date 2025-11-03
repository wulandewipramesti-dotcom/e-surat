<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function LoginProses()
    {
        $session = session();
        $userModel = new UserModel();

        $email = trim($this->request->getPost('email'));
        $password = trim($this->request->getPost('password'));

        // Cari user berdasarkan email
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'User tidak ditemukan');
        }

        // Verifikasi password
        if (!password_verify($password, $user['password'])) {
            return redirect()->to('/login')->with('error', 'Password salah');
        }

        // Set session
        $sessionData = [
            'user_id' => $user['id'],
            'email'   => $user['email'],
            'role'    => $user['role'], // admin / mahasiswa
            'logged_in' => true,
        ];
        $session->set($sessionData);

        // Redirect berdasarkan role
        if ($user['role'] === 'admin') {
            return redirect()->to(base_url('user')); // Controller User
        } elseif ($user['role'] === 'mahasiswa') {
            return redirect()->to(base_url('surat')); // Controller Surat
        }

        return redirect()->to('/login')->with('error', 'Role tidak dikenali');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
