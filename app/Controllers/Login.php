<?php
namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/login'); // arahkan ke view login
    }

  public function LoginProses()
{
    $request = $this->request; // ambil objek request
    dd($request);
}
}