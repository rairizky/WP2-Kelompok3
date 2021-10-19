<?php

namespace App\Database\Seeds;

use App\Models\User;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder {

    public function run() {
        $data = [
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'role' => 'admin'
        ];
        $user = new User();
        $user->save($data);
    }
}