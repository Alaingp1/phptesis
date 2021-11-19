
<?php

require 'conexion.php';

$idusu = $_GET['Usuario_id'];
$Publicacion_nombre = $_POST['Publicacion_nombre'];
$Publicacion_descripcion = $_POST['Publicacion_descripcion'];
$Publicacion_imagen = $_POST['Publicacion_imagen'];



$sql = "INSERT INTO publicacion VALUES ('', '$idusu', '$Publicacion_nombre','$Publicacion_descripcion', '$Publicacion_imagen', 1)";


 echo $sql;
    
    $query = $mysqli->query($sql);

?>