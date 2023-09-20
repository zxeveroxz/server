<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

class EmpresaInfo extends Entity {

    protected $dates = ['created_at','updated_at'];

    /*
   public function getEmpresaRazon() {
      return  $this->empresa_razon;
   }
  */
}