<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Grupos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'grupos_id' => [
                'type'           => 'INT',
                'constraint'     => 2,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'grupos_nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
                'null'=>false
            ]
            
        ]);
        $this->forge->addKey('grupos_id', true);
        $this->forge->createTable('grupos');
    }

    public function down()
    {
        $this->forge->dropTable('grupos');
    }
}
