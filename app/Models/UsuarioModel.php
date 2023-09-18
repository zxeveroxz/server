<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Usuario;
use App\Entities\UsuarioInfo;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'usuario_id';

    protected $useAutoIncrement = true;

    protected $returnType     = Usuario::class; //'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['usuario_uzer', 'usuario_pazz','usuario_id_grupo','usuario_activo'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $asingarGrupo;
    protected $usuarioInfo;

    public function ponerGrupo(string $grupo){
        $row = $this->db->table('grupos')
                    ->where('grupos_nombre',$grupo)
                    ->get()->getFirstRow();
        if($row!=null){
            $this->asingarGrupo = $row->grupos_id;
        }
    }

    protected function agregarGrupo($data){
        $data['data']['usuario_id_grupo'] = $this->asingarGrupo;
        return $data;
    }


    public function agregarUsuarioInfo(UsuarioInfo $datos){
        $this->usuarioInfo = $datos;
    }

    protected function guardarUsuarioInfo($data){
        
        $this->usuarioInfo->usuario_id_usuario =  $data['id'];
        $model = model('UsuarioInfoModel');
        $model->insert($this->usuarioInfo);
        
    }


    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['agregarGrupo'];
    protected $afterInsert    = ['guardarUsuarioInfo'];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

}