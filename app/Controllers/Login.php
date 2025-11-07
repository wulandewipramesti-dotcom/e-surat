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

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // Cek user berdasarkan email
        $user = $userModel->where('email', $email)->first();

        if ($user) {
            $pass = $user['password'];
            $authenticatePassword = password_verify($password, $pass);

            if ($authenticatePassword) {
                $ses_data = [
                    'id'        => $user['id'],
                    'nama'      => $user['nama'],
                    'email'     => $user['email'],
                    'role'      => $user['role'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                echo "Login berhasil sebagai: " . $user['role'];
                exit;
                // Redirect berdasarkan role
                if ($user['role'] === 'admin') {
                    return redirect()->to(base_url('admin'));
                } elseif ($user['role'] === 'mahasiswa') {
                    return redirect()->to(base_url('surat'));
                } else {
                    $session->setFlashdata('error', 'Role tidak dikenali');
                    return redirect()->to('/login');
                }

            } else {
                $session->setFlashdata('error', 'Password salah');
                return redirect()->to('/login');
            }

        } else {
            $session->setFlashdata('error', 'Email tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
