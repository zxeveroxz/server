<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

use App\Controllers\Models\EmpresaModel;

class VerificarFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {   
            $uri = service('uri');
            $RUC = $uri->getSegments()[0];  
            $empresa = model('EmpresaModel');   
            $b = $empresa->buscar('empresa_ruc',$RUC);

            if($b==null){
                return redirect()->to('comercios');
            }
                   
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Haz algo aquí
    }
}