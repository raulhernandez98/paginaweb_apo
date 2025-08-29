<?php

session_start(); //iniciamos sesión para destruirla

$_SESSION = []; //Vaciamos todas las variables de sesión

session_destroy(); //destruimos la sesión

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(),'', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"],$params["httponly"]
    );
}
 //redirigir a la página principal
 header("Location: login.php");
 exit;



?>