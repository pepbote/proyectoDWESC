<?php
header("Location: admin.php");

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $resumen = $_POST["resumen"];
    $autor = $_POST["autor"];

    $set_part = "SET";
    $set_part .= !empty($titulo) ? " titulo = '$titulo'," : "";
    $set_part .= !empty($descripcion) ? " descripcion = '$descripcion'," : "";
    $set_part .= !empty($resumen) ? " resumen = '$resumen'," : "";
    $set_part .= !empty($autor) ? " autor = '$autor'," : "";
    $set_part = rtrim($set_part, ",");

    $conexion->query("UPDATE grupo5_articulos $set_part WHERE id = '$id'");
}
?>
