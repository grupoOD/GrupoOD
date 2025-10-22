<?php
/**
 * Configuración de conexión a la base de datos
 * Centro Médico Grupo OD
 */

// Configuración de la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "centro_medico";
$charset = "utf8mb4";

// Crear conexión con manejo de errores mejorado
try {
    $conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);
    
    // Verificar conexión
    if ($conn->connect_error) {
        throw new Exception("Error de conexión: " . $conn->connect_error);
    }
    
    // Establecer charset para evitar problemas con caracteres especiales
    $conn->set_charset($charset);
    
} catch (Exception $e) {
    // En producción, NO mostrar detalles del error al usuario
    // error_log($e->getMessage()); // Guardar en log
    die("Lo sentimos, hay un problema con la conexión. Por favor, intente más tarde.");
}
?>
