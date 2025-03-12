<?php
session_start();  // Busca si existe una sesión activa

$conexion = mysqli_connect("localhost", "root", "", "libreria_registro"); // El servidor/ usuario /contraseña/nombre de la base de datos
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario y sanitizarlos
    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $autor = mysqli_real_escape_string($conexion, $_POST['autor']);
    $editorial = mysqli_real_escape_string($conexion, $_POST['editorial']);
    $fecha_de_publicacion = mysqli_real_escape_string($conexion, $_POST['fecha_de_publicacion']);
    $categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);

    // Insertar libro en la base de datos
    $query = "INSERT INTO libros (titulo, autor, editorial, fecha_publicacion, categoria, descripcion) 
              VALUES ('$titulo', '$autor', '$editorial', '$fecha_de_publicacion', '$categoria', '$descripcion')";

    $ejecutar = mysqli_query($conexion, $query);
    // Verificar si la inserción fue exitosa
    if ($ejecutar) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }
    // Cerrar la conexión
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria CodeIgniter</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap">
   
    
   <style>
        body {
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
            font-family: Comic Sans MS;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        h1 {
            text-align: center; /* Centra el texto horizontalmente */
            background-color: rgb(0, 0, 0); /* Color de fondo de la barra */
            padding: 50px 20px; /* Espaciado interno: 50px arriba/abajo, 20px izquierda/derecha */
            margin: 0; /* Elimina el margen predeterminado */
            color: #ffffff; /* Color del texto */
            font-size: 60px; /* Tamaño de la letra */
            font-family: Comic Sans MS;
        }
        nav { /* barra de navegador */
            padding: 20px; /* Espaciado interno */
            background-color: #4CAF50; /* Color de fondo */
        }
        ul {
            list-style: none; /* Elimina los puntos de la lista */
            padding: 0; /* Elimina el padding de la lista */
            text-align: center; /* Centra el texto */
            margin: 0; /* Elimina el margen de la lista */
        }
        li {
            display: inline-block; /* Elementos en línea */
            margin: 0 20px; /* Margen entre elementos */
        }
        a { /* Estilo de los enlaces */
            text-decoration: none; /* Quitar subrayado */
            color: rgba(255, 255, 255, 0.93); /* Color del texto */
            font-size: 20px; /* Tamaño del texto */
            font-family: Comic Sans MS;
            border-bottom: 2px solid transparent; /* Borde inferior transparente */
        }
        a:hover { /* Estilo al pasar el mouse */
            color: rgb(6, 6, 6); /* Color al pasar el mouse */
            border-bottom: 2px solid rgb(4, 3, 3); /* Borde inferior rojo al pasar el mouse */
        }
        .contenedor_r {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .registrar {
            background-color: #ffffff;
            padding: 20px; /* Añade un espaciado interno de 20 píxeles alrededor del contenido del elemento */
            border-radius: 8px; /* Redondea las esquinas del elemento con un radio de 8 píxeles */
            box-shadow: 0 0 10px rgba(171, 81, 81, 0.1); /* Añade una sombra alrededor del elemento con un desplazamiento de 0 píxeles en los ejes X e Y, un desenfoque de 10 píxeles y un color de sombra con una opacidad del 10% */
            width: 500px; /* Establece la anchura del elemento a 500 píxeles */
        }
        .registrar h2 {
            margin-top: 0;
            text-align: center;
            font-family: Comic Sans MS;
        }
        .registrar input[type="text"],
        .registrar input[type="date"],
        .registrar button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #000000;
            border-radius: 4px;
            display: block; /* Hace que los elementos se comporten como bloques */
        }
        .registrar button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-family: Comic Sans MS;
        }
        .registrar button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Libreria CodeIgniter</h1>
    <nav>
        <ul>
            
            <li><a href="mostrar_datos.php">Libros</a></li>
            <li><a href="registrar.php">Registrar</a></li>
            <li><a href="Editar_libros.php">Editar</a></li>
        </ul>
    </nav>
    <div class="contenedor_r">
        <div class="registrar">
        <form action="Formulario.php" method="post">
            <h2>Registrar libros</h2>
            <input type="text" placeholder="Titulo" name="titulo">
            <input type="text" placeholder="Autor" name="autor">
            <input type="text" placeholder="Editorial" name="editorial">
            <input type="date" placeholder="fecha de publicacion" name="fecha_de_publicacion">
            <input type="text" placeholder="Categoria" name="categoria">
            <input type="text" placeholder="Descripcion" name="descripcion">
            <button type="submit">Registrar</button>
        </div>
    </div>
</body>
</html>