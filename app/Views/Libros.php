<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria CodeIgniter</title>
    <!-- Incluye DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- Incluye tus estilos CSS -->
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <!-- Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluye DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
    
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
         /* Estilos para DataTables */
        table.dataTable {
            border-collapse: collapse;
            width: 100%;
            background-color:rgb(162, 0, 0);
        }
        table.dataTable thead th {
            background-color: #4CAF50;
            color: white;
        }
        table.dataTable tbody tr {
            background-color: #f9f9f9;
        }
        table.dataTable tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table.dataTable tbody tr:hover {
            background-color: #ddd;
        }
        
    </style>
</head>
<body>
    <h1>Libreria CodeIgniter</h1>
    <nav>
        <ul>
            
            <li><a href="Libros.php">Libros</a></li>
            <li><a href="Formulario.php">Registrar</a></li>
            <li><a href="Editar.php">Editar</a></li>
        </ul>
    </nav>
    <?php
$conexion = mysqli_connect("localhost", "root", "", "libreria_registro");
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

$busqueda = '';
if (isset($_POST['busqueda'])) {
    $busqueda = mysqli_real_escape_string($conexion, $_POST['busqueda']);
}

//consulta a la base de datos con filtro por título
$query = "SELECT * FROM libros WHERE titulo LIKE '%$busqueda%'";
$resultado = mysqli_query($conexion, $query);
//Verificar si hay resultados y mostrar 
if (mysqli_num_rows($resultado) > 0) {
    echo "<table id='example' class='display' style='width:100%'>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Fecha de Publicación</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>{$fila['titulo']}</td>
                <td>{$fila['autor']}</td>
                <td>{$fila['editorial']}</td>
                <td>{$fila['fecha_publicacion']}</td>
                <td>{$fila['categoria']}</td>
                <td>{$fila['descripcion']}</td>
                <td>
                    <a href='editar_libro.php?id={$fila['id']}'>Editar</a>
                    <a href='eliminar_libro.php?id={$fila['id']}' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este libro?\")'>Eliminar</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}
//Cierre de la conexión
mysqli_close($conexion);
?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</body>
</html>
