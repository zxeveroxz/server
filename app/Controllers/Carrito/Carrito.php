<?php namespace App\Controllers\Carrito;

use App\Controllers\BaseController;


class Carrito extends BaseController{
    public function index(){
        $uri = service('uri');
        print_r($uri);
        return "pagina de carrito de compra para el publico";
    }

    public function demo(){
        $uri = service('uri');
        print_r($uri);
     
        return "pagina de carrito de compra para el publico";
    }

}