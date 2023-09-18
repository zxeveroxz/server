<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pais extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pais_id' => [
                'type'           => 'INT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'pais_nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
                'null'=>false
            ],
            'created_at'=>[
                'type'=>'DATETIME',
                'null'=>false
            ],
            'updated_at'=>[
                'type'=>'DATETIME',
                'null'=>true
            ]
            
        ]);
        $this->forge->addKey('pais_id', true);
        $this->forge->createTable('pais');
    }

    public function down()
    {
        $this->forge->dropTable('pais');
    }
}
