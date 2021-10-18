<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model {
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'username', 'email', 'password', 'role'];
}