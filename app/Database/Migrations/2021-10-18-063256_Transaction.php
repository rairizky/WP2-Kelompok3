<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaction extends Migration
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
            'code_transaction' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'room_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'booking_at' => [
                'type' => 'DATE'
            ],
            'total' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        //
        $this->forge->dropTable('transactions');
    }
}
