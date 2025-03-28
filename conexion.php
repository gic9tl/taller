<?php
$servidor = 'localhost';  // Cambia esto si tu servidor de base de datos es diferente
$usuario = 'root';        // Cambia esto por tu usuario de base de datos
$clave = '';              // Cambia esto por tu contraseña si tienes una
$base_de_datos = 'tallerbd'; // El nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($servidor, $usuario, $clave, $base_de_datos);

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
