<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Armada extends Migration
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
            'no_register' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'nama_pemilik' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'merk' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'tahun' => [
                'type' => 'YEAR',
                'constraint' => 4,
                'null' => true,
            ],
            'cc' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'null' => true,
            ],
            'warna_kb' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'no_rangka' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'no_mesin' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'bahan_bakar' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'masa_berlaku' => [
                'type' => 'DATE',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('armada');
    }

    public function down()
    {
        $this->forge->dropTable('armada');
    }
}
