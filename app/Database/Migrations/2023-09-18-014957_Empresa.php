<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Empresa extends Migration
{
    public function up()
    {

    $this->forge->addField([
        'empresa_id' => [
            'type'           => 'INT',
            'constraint'     => 4,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'empresa_ruc' => [
            'type'       => 'VARCHAR',
            'constraint' => '15',
            'unique'     => true,
            'null'=>false
        ],       
        'empresa_activo' => [
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
    $this->forge->addKey('empresa_id', true);
    //$this->forge->addForeignKey('usaurio_id_grupo','grupos','grupos_id','CASCADE','RESTRICT');
    //$this->forge->addUniqueKey(['empresa_ruc','empresa_activo'],'Empresa_activa');
    $this->forge->createTable('empresa');
}

public function down()
{
    $this->forge->dropTable('empresa');
}
}
