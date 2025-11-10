<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Cek apakah user sudah login
        if (!session()->get('isLoggedIn')) {
    return redirect()->to(route_to('login'));
}

        // Jika sudah login
        $data = [
            'title' => 'Dashboard',
            'nama'  => session()->get('nama'),
            'role'  => session()->get('role')
        ];

        return view('home', $data);
    }
}
