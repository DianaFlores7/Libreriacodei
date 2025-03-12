<?php
session_start();  // Busca si existe una sesión activa

$conexion = mysqli_connect("localhost", "root", "", "libreria_registro"); // El servidor/ usuario /contraseña/nombre de la base de datos
if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}