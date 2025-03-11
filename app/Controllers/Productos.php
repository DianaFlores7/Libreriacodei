<?php

namespace App\Controllers;

 class Productos extends BaseController
 {
        public function index()
        {
          return view ('productos');
        }

        
  public function show()
  {
    echo "ControlleProductos: $producto";
  }
 }
    
