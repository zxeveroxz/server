<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

use CodeIgniter\I18n\Time;

class Empresa extends Entity
{

    protected $dates = ['created_at', 'updated_at'];


    
    protected function getEmpresaInfo()
    {
        if(!empty($this->attributes['empresa_id'])){
            $empresaInfo = model("EmpresaInfoModel");
            return $empresaInfo->where('empresa_id_empresa', $this->attributes['empresa_id'])->first(); 
        }
        return $this;
    }
    

   
}
