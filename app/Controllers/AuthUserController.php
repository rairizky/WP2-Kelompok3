<?php

namespace App\Controllers;

use App\Models\User;

class AuthUserController extends BaseController {

    public function login() {
        
        echo view('landing/auth/login');
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

            $find_user = $user->where('role', 'user')->where('username', $username)->first();
            if ($find_user) {
                $current_password = $find_user['password'];
                $verify_password = password_verify($password, $current_password);
                if ($verify_password) {
                    $user_data = [
                        'user_id' => $find_user['id'],
                        'user_username' => $find_user['username'],
                        'user_email' => $find_user['email']
                    ];
                    $session->set($user_data);
                    return redirect('landing_index');
                } else {
                    $session->setFlashdata('error', 'Password not match!');
                    return redirect('user_login');
                }
            } else {
                $session->setFlashdata('error', 'Username not found!');
                return redirect('user_login');
            }
        }
    }

    public function register() {
        
        echo view('landing/auth/register');
    }

    public function store_register() {
        $session = session();
        $user = new User();
        $rules = [
            'username' => 'required|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required',
            'match_password' => 'required|matches[password]'
        ];

        if ($this->validate($rules)) {
            $username = $this->request->getVar('username');
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $new_user = [
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];
            $user->save($new_user);
            $session->setFlashdata('success', 'Create account successfully');
            return redirect('user_register');
        } else {
            $session->setFlashdata('error_validation', $this->validator);
            return redirect('user_register');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect('landing_index');
    }
}