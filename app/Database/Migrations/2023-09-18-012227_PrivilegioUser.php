<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PrivilegioUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'PrivilegioUser_id' => [
                'type'           => 'INT',
                'constraint'     => 2,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'PrivilegioUser_nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
                'null'=>false
            ]
            
        ]);
        $this->forge->addKey('PrivilegioUser_id', true);
        $this->forge->createTable('PrivilegioUser');
    }

    public function down()
    {
        $this->forge->dropTable('PrivilegioUser');
    }
}
