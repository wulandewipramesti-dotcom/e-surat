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
    $session = session();
    $userModel = new UserModel();

    $email = trim($this->request->getVar('email'));
    $password = $this->request->getVar('password');

    $user = $userModel->where('email', $email)->first();

    if ($user && password_verify($password, $user['password'])) {
        // Set session
        $sessionData = [
            'user_id' => $user['id'],
            'nama'    => $user['nama'],
            'email'   => $user['email'],
            'role'    => $user['role'],
            'isLoggedIn' => true
        ];
        $session->set($sessionData);

          if ($user['role'] === 'admin') {
            return redirect()->to('/admin'); // ganti sesuai route admin
        } elseif ($user['role'] === 'mahasiswa') {
            return redirect()->to('/dashboard_mhs'); // ganti sesuai route mahasiswa
        } else {
            // default jika role tidak dikenal
            return redirect()->to('/login')->with('error', 'Role tidak dikenali.');
        }

    } else {
        $session->setFlashdata('error', 'Email atau password salah!');
        return redirect()->to('/login');
    }
}

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
