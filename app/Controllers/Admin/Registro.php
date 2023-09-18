<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Entities\Usuario;
use App\Entities\UsuarioInfo;

class Registro extends BaseController{

    protected $configs;

    public function __construct(){
        $this->configs = config('Admin');
    }

    public function index(){

        $data = [
            'usuario_uzer'=>'yoooo'.date('s'),
            'usuario_pazz'=>'passs',
            //'usuario_id_grupo'=>1,

            'usuario_correo'=>'ssssddd@kk.com',
            'usuario_datos'=>'yooooooopppe',
            'usuario_documento'=>'555555'
        ];

        $usuario = new Usuario($data);
        
        $model = model('UsuarioModel');
        $model->ponerGrupo($this->configs->defaultGrupoUsuario);

        $usuarioInfo = new UsuarioInfo($data);        
        $model->agregarUsuarioInfo($usuarioInfo);

        $model->save($usuario);

        return 'esto es el registro';
    }

}