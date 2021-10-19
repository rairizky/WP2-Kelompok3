<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomFacility extends Model {
    protected $table = 'room_facilities';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'room_id', 'facility_icon', 'name'];

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}