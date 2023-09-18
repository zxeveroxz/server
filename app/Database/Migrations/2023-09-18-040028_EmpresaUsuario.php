<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EmpresaUsuario extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([        
            'empresa_id_emmpresa' => [
                'type'       => 'INT',
                'constraint' => '4',
                'unsigned'       => true,
                'null'=>false
            ],    
            'empresa_id_usuario' => [
                'type'       => 'INT',
                'constraint' => '6',
                'unsigned'       => true,
                'null'=>false
            ],
            'empresa_id_privilegiouser' => [
                'type'       => 'INT',
                'constraint' => '2',
                'unsigned'       => true,
                'null'=>false
            ],
            
        ]);
        $this->forge->addKey(['empresa_id_emmpresa','empresa_id_usuario','empresa_id_privilegiouser'],false,true,'FK_empresa_usurio_privilegio');
        $this->forge->addForeignKey('empresa_id_emmpresa','empresa','empresa_id','CASCADE','RESTRICT');
        $this->forge->addForeignKey('empresa_id_usuario','usuario','usuario_id','CASCADE','RESTRICT');
        $this->forge->addForeignKey('empresa_id_privilegiouser','privilegiouser','privilegiouser_id','CASCADE','RESTRICT');
        $this->forge->createTable('EmpresaUsuario');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('EmpresaUsuario');
    }
}
