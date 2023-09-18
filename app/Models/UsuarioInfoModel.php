<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\UsuarioInfo;

class UsuarioInfoModel extends Model
{
    protected $table      = 'usuarioinfo';
    protected $primaryKey = 'usuario_id_usuario';
    protected $useAutoIncrement = false;

    protected $returnType     = UsuarioInfo::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['usuario_correo', 'usuario_datos','usuario_documento'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

  



}