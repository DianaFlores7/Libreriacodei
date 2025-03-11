<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Librería</title>
    <link rel="stylesheet" href="productos.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
</head>
<body>
    <main>
    <div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Right-aligned menu
  </button>
  <div class="dropdown-menu dropdown-menu-right">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>
    <style>
        h1 {
            text-align: center;
            color: #000000;
            margin-top: 20px;
            font-size: 50px;
        }
        nav { /* barra */
            background-color: #f89afaec;
        }
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
            color: #000000ec;       /* color texto */
            font-size: 20px;        /* tamaño texto */
            border-bottom: 2px solid transparent;  /* borde inferior transparente */
        }
        a:hover { /* al pasar mouse */
            color: rgb(244, 20, 244);  /* color al pasar el mouse */
            border-bottom: 2px solid red;  /* borde inferior rojo al pasar el mouse */
        }
    </style>
</head>

    <h1>Libreria CodeIgniter</h1>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Libros</a></li>
            <li><a href="#">Registrar</a></li>
            <li><a href="#">Editar</a></li>
        </ul>
    </nav>
       /* Formulario para agregar un nuevo libro */
    <h1>Agregar Nuevo Libro</h1>
    <form action="procesar_libro.php" method="post">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor" required><br><br>

        <label for="editorial">Editorial:</label><br>
        <input type="text" id="editorial" name="editorial" required><br><br>

        <label for="fecha_publicacion">Fecha de Publicación:</label><br>
        <input type="date" id="fecha_publicacion" name="fecha_publicacion" required><br><br>

        <label for="categoria">Categoría:</label><br>
        <input type="text" id="categoria" name="categoria" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Agregar Libro">
    </form>
    
    
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