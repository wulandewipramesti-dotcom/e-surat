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

        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            $session->setFlashdata('error', 'Email atau password salah');
            return redirect()->to(route_to('login'));
        }

        $hashFromDb = $user['password'];

        // Cek password (plain atau hash)
        if ($hashFromDb === $password || password_verify($password, $hashFromDb)) {
            // Login berhasil
            $session->regenerate();
            $session->set([
            'logged_in' => true,
            'id'        => $user['id'],  // tambahkan ini
            'nama'      => $user['name'],
            'role'      => $user['role'] ?? 'admin',
]);


            // Jika password masih plain, otomatis hash dan simpan
            if ($hashFromDb === $password) {
                $userModel->update($user['id'], ['password' => password_hash($password, PASSWORD_DEFAULT)]);
            }

            return redirect()->to(route_to('home'));
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