<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuarioInfo extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([        
            'usuario_id_usuario' => [
                'type'       => 'INT',
                'constraint' => '6',
                'unsigned'       => true,
                'auto_increment' => false,
                'null'=>false
            ],    
            'usuario_correo' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',                
                'null'=>false
            ],    
            'usuario_datos' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',                
                'null'=>true
            ],
            'usuario_documento' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',                
                'null'=>true
            ]
            
        ]);
        $this->forge->addKey('usuario_id_usuario', true);
        $this->forge->addUniqueKey(['usuario_id_usuario','usuario_correo'],'UN_usuario_correo');
        $this->forge->addForeignKey('usuario_id_usuario','usuario','usuario_id','CASCADE','RESTRICT');
        
        $this->forge->createTable('UsuarioInfo');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('UsuarioInfo');
    }



}
