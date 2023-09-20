<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UsuarioInfo extends Entity
{

   // protected $dates = ['created_at','updated_at'];
   public function getRazon()
   {
      return $this->empresa_razon;
   }
}
