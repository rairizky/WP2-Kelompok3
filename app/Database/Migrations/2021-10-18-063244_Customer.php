<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
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
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'date_of_birth' => [
                'type' => 'DATE'
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['male', 'female']
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('customers');
    }

    public function down()
    {
        //
        $this->forge->dropTable('customers');
    }
}
