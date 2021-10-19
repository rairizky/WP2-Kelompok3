<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaction extends Model {
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'code_transaction', 'room_id', 'customer_id', 'booking_at', 'total', 'status'];

    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}