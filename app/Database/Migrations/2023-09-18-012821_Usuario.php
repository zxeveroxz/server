<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'usuario_id' => [
                'type'           => 'INT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario_uzer' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
                'null'=>false
            ],
            'usuario_pazz' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'usuario_id_grupo' => [
                'type'       => 'INT',
                'constraint' => '2',
                'unsigned'       => true,
                'null'=>false
            ],
            'usuario_activo' => [
                'type'       => 'INT',
                'constraint' => '1',
                'default'=>'1',                
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
        $this->forge->addKey('usuario_id', true);
        $this->forge->addForeignKey('usuario_id_grupo','grupos','grupos_id','CASCADE','RESTRICT');
        $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}
