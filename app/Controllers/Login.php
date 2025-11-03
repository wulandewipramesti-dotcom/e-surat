<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        // Menampilkan halaman login
        return view('auth/login');
    }

    public function LoginProses()
    {
        $session = session();
        $userModel = new UserModel();

        $email = trim($this->request->getPost('email'));
        $password = trim($this->request->getPost('password'));

        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            $session->setFlashdata('error', 'Email atau password salah');
            return redirect()->to(route_to('login'));
        }

        $hashFromDb = $user['password'];

        // cek password (plain atau hash)
        if ($hashFromDb === $password || password_verify($password, $hashFromDb)) {
            // regenerasi session ID agar aman
            $session->regenerate();
            $session->set([
                'logged_in' => true,
                'id'        => $user['id'],
                'nama'      => $user['nama'],
                'email'     => $user['email'],
                'role'      => $user['role'] ?? 'mahasiswa', // default mahasiswa
            ]);

            // Jika password masih plain, auto-hash dan update
            if ($hashFromDb === $password) {
                $userModel->update($user['id'], [
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                ]);
            }

            // Redirect berdasarkan role
            if ($user['role'] === 'admin') {
                return redirect()->to('/admin/user'); // folder admin/user/index.php
            } else {
                return redirect()->to('/mahasiswa/surat'); // folder mahasiswa/surat/index.php
            }
        } else {
            $session->setFlashdata('error', 'Email atau password salah');
            return redirect()->to(route_to('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(route_to('login'));
    }
}
