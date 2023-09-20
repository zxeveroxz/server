<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Usuario extends Entity {

    protected $dates = ['created_at','updated_at'];

    protected function setUsuarioPazz(string $pazz){
        $this->attributes['usuario_pazz']=\password_hash($pazz, PASSWORD_DEFAULT);
    }

  
}