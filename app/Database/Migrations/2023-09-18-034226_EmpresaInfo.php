<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class EmpresaInfo extends Migration
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
            'empresa_razon' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'unique'     => true,
                'null'=>false
            ],
            'empresa_fecha' => [
                'type'=>'TIMESTAMP',
                'null'=>false,
                'default'=>new RawSql('CURRENT_TIMESTAMP'),
            ],
            
        ]);
        //$this->forge->addKey('empresa_id_emmpresa', true);
        $this->forge->addForeignKey('empresa_id_emmpresa','empresa','empresa_id','CASCADE','RESTRICT');
        $this->forge->createTable('EmpresaInfo');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('EmpresaInfo');
    }
}
