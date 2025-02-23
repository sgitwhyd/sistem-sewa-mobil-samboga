<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNoteTransactionColumn extends Migration
{
    public function up()
    {
        // Add 'note' column to 'transaction' table
        $this->forge->addColumn('transactions', [
            'note' => [
                'type' => 'TEXT',   // You can use 'TEXT', 'VARCHAR' or 'TEXT' depending on the size
                'null' => true,     // Allow null values if needed
            ],
        ]);
    }

    public function down()
    {
        // Drop 'note' column from 'transaction' table
        $this->forge->dropColumn('transaction', 'note');
    }
}
