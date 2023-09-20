<?php namespace App\Controllers\Admin;

use App\Controllers\Admin\BaseControllerAdmin;
use App\Models\EmpresaModel;
use App\Models\EmpresaInfoModel;


class Login extends BaseControllerAdmin{
    
    public function index(){      
        return "login de inicio para admin";
    }

    public function comercios(){
        $empresa = model("EmpresaModel");              
        $rows =  $empresa->findAll();// $empresa->get()->getResultObject();      

        return view('Admin/comercios',['ROWS'=>$rows]);
    }

}