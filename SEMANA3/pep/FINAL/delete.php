<?php
header("Location: admin.php");

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $conexion->query("DELETE FROM grupo5_articulos WHERE id = '$id'");
}
?>
