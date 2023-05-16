<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try {
    $conexion = new PDO("informix:host=host.docker.internal; service=9088;database=mdn_cornelio; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix", "in4mix");
    echo "conexión exitosa";
} catch (PDOException $e) {
    echo "No se pudo conectar";
    echo "<br>";
    echo $e->getMessage();
}
echo "<br>";
echo "mensaje despues de la conexión";

?>


