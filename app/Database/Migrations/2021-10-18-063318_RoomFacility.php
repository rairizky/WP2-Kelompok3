<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RoomFacility extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'room_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'facility_icon' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('room_facilities');
    }

    public function down()
    {
        //
        $this->forge->dropTable('room_facilities');
    }
}
