<?php
header('Content-Type: application/json; charset=utf-8');
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

include("conexion_bd.php");

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST["correo"] ?? '';
        $contrasena = $_POST["contrasena"] ?? '';

        if (empty($correo) || empty($contrasena)) {
            echo json_encode([
                "status" => "error",
                "message" => "Debes llenar todos los campos"
            ]);
            exit;
        }

        // Buscar usuario por correo
        $stmt = $con->prepare("SELECT * FROM doctores WHERE correo = :correo LIMIT 1");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Comparación directa porque las contraseñas están en texto plano
        if ($user && $contrasena === $user['contrasena']) {
            // Guardar sesión
            $_SESSION['correo'] = $user['correo'];

            echo json_encode([
                "status" => "success",
                "message" => "Inicio de sesión correcto"
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Correo o contraseña incorrectos"
            ]);
        }
    }
} catch (Throwable $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Error interno: " . $e->getMessage()
    ]);
}
exit;
