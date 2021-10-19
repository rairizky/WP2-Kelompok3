<?php

namespace App\Models;

use CodeIgniter\Model;

class Room extends Model {
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'name', 'total', 'description', 'room_photo', 'price', 'room_type_id'];

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}