<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('admin/users/index', [
            'title' => 'Manajemen Users',
            'users' => $this->userModel->findAll()
        ]);
    }

    public function create()
    {
        return view('admin/users/create', [
            'title' => 'Tambah User'
        ]);
    }

    public function store()
    {
        $this->userModel->insert([
            'nama'     => $this->request->getPost('nama'),
            'nim'      => $this->request->getPost('nim'),
            'jurusan'  => $this->request->getPost('jurusan'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
            'role'     => $this->request->getPost('role')
        ]);

        return redirect()->to('admin/users')->with('success', 'User berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('admin/users/edit', [
            'title' => 'Edit User',
            'user'  => $this->userModel->find($id)
        ]);
    }

    public function update($id)
    {
        $data = [
            'nama'    => $this->request->getPost('nama'),
            'nim'     => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),
            'email'   => $this->request->getPost('email'),
            'role'    => $this->request->getPost('role')
        ];

        if ($this->request->getPost('password')) {
            $data['password'] = password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            );
        }

        $this->userModel->update($id, $data);

        return redirect()->to('admin/users')->with('success', 'User berhasil diupdate');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('admin/users')->with('success', 'User berhasil dihapus');
    }
}
