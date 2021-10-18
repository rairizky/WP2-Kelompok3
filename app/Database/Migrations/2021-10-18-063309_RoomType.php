<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RoomType extends Migration
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
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('room_types');
    }

    public function down()
    {
        //
        $this->forge->dropTable('room_types');
    }
}
