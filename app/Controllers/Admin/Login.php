<?php namespace App\Controllers\Admin;

use App\Controllers\Admin\BaseControllerAdmin;
use App\Models\EmpresaModel;

class Login extends BaseControllerAdmin{

    
    public function __construct(){
        $uri = service('uri');
        $this->RUC = $uri->getSegments()[0];          
        
       

    }

    public function is_session_available(){
        $empresa = model('EmpresaModel');   
        if($empresa->buscar('empresa_ruc',$this->RUC)==null){
           
            return redirect()->to('https://example.com');
        }
        
        /*
        if($empresa->buscar('empresa_ruc','102030405000')==null){
            return redirect()->to('https://example.com');
        }else{
            echo "todo ok";
        }
        */
    }

    public function index(){
        
      //  return redirect()->to('https://example.com');
      //d($this);
        return "login de inicio para admin";
    }

}