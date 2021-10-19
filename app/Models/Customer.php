<?php

namespace App\Models;

use CodeIgniter\Model;

class Customer extends Model {
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'user_id', 'fullname', 'date_of_birth', 'gender'];

    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}