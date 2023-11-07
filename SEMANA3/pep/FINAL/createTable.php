<?php

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

/*$conexion->query("CREATE TABLE grupo5_articulos (
    id INT PRIMARY KEY,
    titulo VARCHAR(255),
    descripcion TEXT,
    resumen TEXT,
    autor VARCHAR(100)
);");*/

$resultados = $conexion->query("SHOW TABLES");

foreach ($resultados as $fila) {
    echo $fila["Tables_in_" . "daw2"] . "<br>";
}
?>