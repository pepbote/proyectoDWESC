<?php

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

/*$conexion->query(
    "CREATE TABLE grupo5_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    admin BOOLEAN
);"
);*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["username"];
    $contrasena = $_POST["password"];
}

$resultados = $conexion->query("SELECT nombre, contrasena FROM grupo5_usuarios");

foreach ($resultados as $resultado) {
    if ($nombre == $resultado["nombre"] && $contrasena == $resultado["contrasena"]) {
        header("Location: index.php");
    }
    else {
        header("Location: login.php");
    }
}
?>