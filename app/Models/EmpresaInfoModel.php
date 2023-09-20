<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\EmpresaInfo;

class EmpresaInfoModel extends Model
{
    protected $table      = 'empresainfo';
    protected $primaryKey = 'empresa_id_empresa';
    protected $useAutoIncrement = false;

    protected $returnType     = EmpresaInfo::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['empresa_razon', 'empresa_fecha'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

  



}