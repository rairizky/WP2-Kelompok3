<?php

namespace App\Controllers;

use App\Models\User;

class AuthAdminController extends BaseController {

    public function login() {

        echo view('admin/auth/login');
    }

    public function store_login() {

        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if ($this->validate($rules)) {
            $session = session();
            $user = new User();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $find_user = $user->where('role', 'admin')->where('username', $username)->first();
            if ($find_user) {
                $current_password = $find_user['password'];
                $verify_password = password_verify($password, $current_password);
                if ($verify_password) {
                    $admin_data = [
                        'admin_id' => $find_user['id'],
                        'admin_username' => $find_user['username'],
                        'admin_email' => $find_user['email']
                    ];
                    $session->set($admin_data);
                    return redirect('admin_room');
                } else {
                    $session->setFlashdata('error', 'Password not match!');
                    return redirect('admin_login');
                }
            } else {
                $session->setFlashdata('error', 'Username not found!');
                return redirect('admin_login');
            }
        }
    }

    public function logout() {
        session()->destroy();
        return redirect('admin_login');
    }
}