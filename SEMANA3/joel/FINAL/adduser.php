<?php

header('Location: login.php');

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["username"];
    $contrasena = $_POST["password"];
}

$conexion->query("INSERT INTO grupo5_usuarios(nombre, contrasena, admin) VALUES ($nombre', '$contrasena', FALSE)");
?>
