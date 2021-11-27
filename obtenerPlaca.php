<?php 

require 'conexion.php';

$sql = "SELECT c.Sensores_id, s.Sensores_nombre FROM cultivo AS c INNER JOIN sensores AS s ON c.Sensores_id = s.Sensores_id WHERE s.Sensores_id =  ". $_GET["Sensores_id"] ." AND Cultivo_id = ". $_GET["Cultivo_id"] ;

$query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
?>