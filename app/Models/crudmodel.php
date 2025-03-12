<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    protected $table = 'libros';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titulo', 'autor', 'editorial', 'fecha_publicacion', 'categoria', 'descripcion'];
}
