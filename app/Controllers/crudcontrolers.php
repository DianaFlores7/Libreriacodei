<?php

namespace App\Controllers;

use App\Models\CrudModel;
use CodeIgniter\Controller;

class CrudControlers extends Controller
{
    public function registrar()
    {
        $model = new CrudModel();

        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'autor' => $this->request->getPost('autor'),
            'editorial' => $this->request->getPost('editorial'),
            'fecha_publicacion' => $this->request->getPost('fecha_publicacion'),
            'categoria' => $this->request->getPost('categoria'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];

        $model->insert($data);

        return redirect()->to('/productos/libreria');
    }
}
