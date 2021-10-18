<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomType extends Model {
    protected $table = 'room_types';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'name', 'slug'];
}