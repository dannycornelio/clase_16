<?php
try{
$conexion = new PDO("informix:host=host.docker.internal; service=9088;database=tienda; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix", "in4mix");
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();

}
 echo "<br>";
 echo "Mensaje despues de la conexion";


?>