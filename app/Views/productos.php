<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria CodeIgniter</title>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Librería</title>
    <style>
        body {
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
        }
        h1 {
            text-align: center; /* Centra el texto horizontalmente */
            background-color: rgb(0, 0, 0); /* Color de fondo de la barra */
            padding: 50px 20px; /* Espaciado interno: 50px arriba/abajo, 20px izquierda/derecha */
            margin: 0; /* Elimina el margen predeterminado */
            color: #ffffff; /* Color del texto */
            font-size: 60px; /* Tamaño de la letra */
            font-family: Comic Sans MS; /* Tipo de letra */
        }
        nav { /* barra de navegador */
            padding: 20px; /* Espaciado interno */
            background-color: rgba(66, 76, 213, 0.93); /* Color de fondo */
            margin: 0; /* Elimina el margen predeterminado */
        }
        ul {
            list-style: none;
            padding: 0; /* Elimina el padding del ul */
            margin: 0; /* Elimina el margen del ul */
            text-align: center; /* Centra el texto */
        }
        li {
            display: inline-block; /* En línea */
            margin: 0 20px; /* 0 arriba y abajo, 20 izquierda y derecha, margen entre elementos */
        }
        a { /* letras de menú */
            text-decoration: none; /* Quitar subrayado */
            color: rgba(255, 255, 255, 0.93); /* Color texto */
            font-size: 20px; /* Tamaño texto */
            font-family: Comic Sans MS; /* Tipo de letra */
            border-bottom: 2px solid transparent; /* Borde inferior transparente */
        }
        a:hover { /* al pasar mouse */
            color: rgb(255, 4, 4); /* Color al pasar el mouse */
            border-bottom: 2px solid red; /* Borde inferior rojo al pasar el mouse */
        }
    </style>
</head>
<body>
    <h1>Libreria CodeIgniter</h1>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Libros</a></li>
            <li><a href="registrar/registrar.php">Registrar</a></li>
            <li><a href="#">Editar</a></li>
        </ul>
    </nav>
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