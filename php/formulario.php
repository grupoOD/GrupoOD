<?php
include("conexion.php");

// Validar que los datos existan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar y validar inputs
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';
    $asunto = isset($_POST['asunto']) ? trim($_POST['asunto']) : '';
    $mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '';
    
    // Validaciones básicas
    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        header("Location: ../index.php?error=campos_vacios");
        exit();
    }
    
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?error=correo_invalido");
        exit();
    }
    
    // Usar prepared statements para prevenir SQL injection
    $stmt = $conn->prepare("INSERT INTO contacto (nombre, correo, asunto, mensaje, fecha) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $nombre, $correo, $asunto, $mensaje);
    
    if ($stmt->execute()) {
        header("Location: ../index.php?success=mensaje_enviado");
    } else {
        header("Location: ../index.php?error=error_servidor");
    }
    
    $stmt->close();
    $conn->close();
} else {
    header("Location: ../index.php");
}
?>
