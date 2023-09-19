<?php namespace App\Controllers\Admin;

use App\Controllers\Admin\BaseControllerAdmin;
use App\Models\EmpresaModel;


class Login extends BaseControllerAdmin{
    
    public function index(){      
        return "login de inicio para admin";
    }

    public function comercios(){
        $empresa = model("EmpresaModel");
        $rows = $empresa->get()->getResultObject();      

        return view('Admin/comercios',['ROWS'=>$rows]);
    }

}