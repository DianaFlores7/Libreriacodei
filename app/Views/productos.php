<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria CodeIgniter</title>
    <style>
        body {
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
        }
        h1 {
            text-align: center; /* Centra el texto horizontalmente */
            background-color:rgb(0, 0, 0); /* Color de fondo de la barra */
            padding: 50px 20px; /* Espaciado interno: 50px arriba/abajo, 20px izquierda/derecha */
            margin: 0; /* Elimina el margen predeterminado */
            color: #ffffff; /* Color del texto */
            font-size: 60px; /* Tamaño de la letra */
            font-family: 'Arial', sans-serif; /* Tipo de letra */
        }       

        nav { /* barra de navegador */
            padding: 0 px 20px; /* Espaciado interno: 50px arriba/abajo, 20px izquierda/derecha */
        background-color:rgba(66, 76, 213, 0.93);;}
       ul {
     list-style: none;
     padding: 20px;        /* margen */ 
     text-align: center;  /* centrar texto */
      }
       li {
    display: inline-block;    /* en línea */
    margin: 0 20px;     /* 0 arriba y abajo, 20 izquierda y derecha, margen entre elementos */
    }
      a {  /* letras de menú */
    text-decoration: none;  /* quitar subrayado */
    color:rgba(255, 255, 255, 0.93);       /* color texto */
    font-size: 20px;        /* tamaño texto */
    border-bottom: 2px solid transparent;  /* borde inferior transparente */
    }
     a:hover { /* al pasar mouse */
    color: rgb(255, 4, 4);  /* color al pasar el mouse */
    border-bottom: 2px solid red;  /* borde inferior rojo al pasar el mouse */
     }
    </style>
</head>
<body>
    <h1>Libreria CodeIgniter</h1>
    
    <nav>    <!-- Se usa para agrupar enlaces de navegación, como menús o barras de navegación.-->
        <ul>   <!--Agrupa elementos de lista sin un orden específico.-->
            <li><a href="index.php">Inicio</a></li>
            <li><a href="mostrar_datos.php">Libros</a></li>
            <li><a href="registrar.php">Registrar</a></li> 
            <li><a href="Editar_libros.php">Editar</a></li>
        </ul>
    </nav>
    </div>

</body>
</html>
        
        
        <script src="scrip.js"></script>
        <script>
            // Agregar evento de clic al botón
            document.getElementById('irARegistrar').addEventListener('click', function() {
                document.getElementById('registro').scrollIntoView({ behavior: 'smooth' });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </main>
</body>
</html>