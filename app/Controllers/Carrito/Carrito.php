<?php

namespace App\Controllers\Carrito;

use App\Controllers\BaseController;
use CodeIgniter\Model;

class Carrito extends BaseController
{

    public $RUC;
    public $RAZON;

    public function __construct()
    {
        $uri = service('uri');
        $this->RUC = $uri->getSegments()[0];
        $empresa = model("EmpresaModel");
        $rows =  $empresa->where('empresa_ruc',$this->RUC)->first(); 

        $this->RAZON = $rows->empresaInfo->empresa_razon;
        
    }

    public function index()
    {

        return "<h1>$this->RAZON</h1>pagina de carrito de compra para el publico";
    }

    public function demo()
    {
        $uri = service('uri');
        print_r($uri);

        return "pagina de carrito de compra para el publico";
    }
}
