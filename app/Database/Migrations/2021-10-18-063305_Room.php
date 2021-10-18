<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Room extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'total' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'description' => [
                'type' => 'TEXT'
            ],
            'room_photo' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'room_type_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('rooms');
    }

    public function down()
    {
        //
        $this->forge->dropTable('rooms');
    }
}
