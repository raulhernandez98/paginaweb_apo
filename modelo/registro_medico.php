<?php

header('Content-Type: application/json'); // Respuesta en JSON

include("conexion_bd.php");

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres1 = $_POST["nombres"];
    $apellidos1 = $_POST["apellidos"];
    $dui1 = $_POST["dui"];
    $jvpm1 = $_POST["jvpm"];
    $conadem1 = $_POST["conadem"];
    $correo1 = $_POST["correo"];
    $alias1 = $_POST["alias"];
    $contrasena1 = $_POST["contrasena"];
    $especialidad1 = $_POST["especialidad"];
    $subespecialidad1 = $_POST["subespecialidad"];
    $direccion1 = $_POST["direccion"];
    $fecha_ingreso1 = $_POST["fecha_ingreso"];
   
     // Procesar imagen
if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === UPLOAD_ERR_OK) {
    $nombreFoto = basename($_FILES["foto"]["name"]);
    $rutaDestino = "uploads/" . $nombreFoto;

    if (!is_dir("uploads")) {
        mkdir("uploads", 0777, true);
    }

    move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaDestino);
} else {
    echo "Error al subir la foto.";
}


    $sql = "INSERT INTO doctores (
             nombres, 
             apellidos, 
             dui, 
             jvpm, 
             conadem, 
             correo, 
             alias, 
             contrasena,
             especialidad, 
             subespecialidad, 
             direccion, 
             fecha_ingreso, 
             foto)
             VALUES(
             :nombres,
             :apellidos,
             :dui,
             :jvpm,
             :conadem,
             :correo,
             :alias,
             :contrasena,
             :especialidad,
             :subespecialidad,
             :direccion,
             :fecha_ingreso,
             :foto)";

             $stmt = $con->prepare($sql);

             $stmt->bindParam(':nombres',$nombres1);
             $stmt->bindParam(':apellidos',$apellidos1);
             $stmt->bindParam(':dui',$dui1);
             $stmt->bindParam(':jvpm',$jvpm1);
             $stmt->bindParam(':conadem',$conadem1);
             $stmt->bindParam(':correo',$correo1);
             $stmt->bindParam(':alias',$alias1);
             $stmt->bindParam(':contrasena',$contrasena1);
             $stmt->bindParam(':especialidad',$especialidad1);
             $stmt->bindParam(':subespecialidad',$subespecialidad1);
             $stmt->bindParam(':direccion',$direccion1);
             $stmt->bindParam(':fecha_ingreso',$fecha_ingreso1);
             $stmt->bindParam(':foto',$rutaDestino);

           if ($stmt->execute()) {
                echo json_encode([
                    "status" => "success",
                    "message" => "El médico se guardó correctamente"
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "Hubo un problema al guardar"
                ]);
            }
            exit();
        }         
    



?>