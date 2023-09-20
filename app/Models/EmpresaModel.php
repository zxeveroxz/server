<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Empresa;

class EmpresaModel extends Model
{
    protected $table      = 'empresa';
    protected $primaryKey = 'empresa_id';

    protected $useAutoIncrement = true;

    protected $returnType     = Empresa::class; //'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['empresa_ruc','empresa_activo'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function buscar(string $columna,string $valor)
    {
        return $this->db->table('empresa')->where($columna,$valor)->get()->getRow();
        
    }
/*
    public function empresaInfo()
    {
        return $this->hasOne('App\Models\EmpresaInfoModel', 'empresa_id', 'empresa_id_empresa');
    }
*/
}