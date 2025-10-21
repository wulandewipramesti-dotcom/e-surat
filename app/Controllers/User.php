<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = array(
            'title'  => 'Data User',
            'menuAdminUser'  => 'active',
        );
        return view('admin/user/index', $data); 

    }
}