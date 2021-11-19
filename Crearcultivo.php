

<?php

require 'conexion.php';

$idusu = $_GET['Usuario_id'];
$idtipo = $_GET['Tipo_id'];
$Cultivo_apodo = $_POST['Cultivo_apodo'];
$Cultivo_imagen = $_POST['Cultivo_imagen'];

$sql = "INSERT INTO cultivo VALUES ('', '$idusu', '$idtipo', null, '$Cultivo_apodo', '$Cultivo_imagen', 1)";


 echo $sql;
    
    $query = $mysqli->query($sql);

?>