<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    // Halaman login
    public function index()
    {
        return view('auth/login');
    }

    // Proses login
    public function LoginProses()
    {
        $session = session();
        $userModel = new UserModel();

        $email = trim($this->request->getPost('email'));
        $password = trim($this->request->getPost('password'));

        // Ambil user berdasarkan email
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            $session->setFlashdata('error', 'Email tidak ditemukan!');
            return redirect()->back();
        }

        // Verifikasi password
        if (!password_verify($password, $user['password'])) {
            $session->setFlashdata('error', 'Password salah!');
            return redirect()->back();
        }

        // Simpan data user ke session
        $session->set([
            'id'        => $user['id'],
            'email'     => $user['email'],
            'nama'      => $user['nama'],
            'role'      => $user['role'],
            'logged_in' => true
        ]);

        // Redirect ke home
        return redirect()->to(route_to('home'));
    }

    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to(route_to('login'));
    }
}
