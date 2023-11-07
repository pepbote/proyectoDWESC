<?php
header("Location: admin.php");

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $resumen = $_POST["resumen"];
    $autor = $_POST["autor"];
}
   $conexion->query("INSERT INTO grupo5_articulos(id, titulo, descripcion, resumen, autor) VALUES ('$id', '$titulo', '$descripcion', '$resumen', '$autor')");
?>