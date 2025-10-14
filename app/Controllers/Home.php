<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {

        $data = array(
            "title" => "Dashboard",
            "menuDashboard" => "active",
        );
        return view('home', $data);
    }
}
