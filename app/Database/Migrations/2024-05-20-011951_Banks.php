<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Banks extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'bank_number' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'bank_owner' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('banks');
    }

    public function down()
    {
        $this->forge->dropTable('banks');
    }
}
