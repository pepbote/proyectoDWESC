<?php

header('Location: chat.php');

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

/*$conexion->query("
    CREATE TABLE grupo5_comentarios(
        comentario VARCHAR(255) NOT NULL,
        usuario VARCHAR(30) NOT NULL,
        autor BOOLEAN
        )");*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentario = $_POST["comentario"];

}

$conexion->query("INSERT INTO grupo5_comentarios(comentario, usuario) VALUES ('$comentario', 'davida')");

?>