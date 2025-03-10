<?php

namespace App\Controllers;

 class Productos extends BaseController
 {
        public function index()
        {
          return view ('Productos');
        }

        public function libreria()
        {
          
          return view ('productos/libreria');
        }

        public function formulario()
        {
            return view ('productos/formulario');
        }

  public function show()
  {
    echo "ControlleProductos: $producto";
  }
 }
    
