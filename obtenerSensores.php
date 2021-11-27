<?php

    require "conexion.php";

    
        
    $sql = "SELECT c.Sensores_id, s.Sensores_nombre FROM cultivo AS c INNER JOIN sensores AS s ON c.Sensores_id = s.Sensores_id WHERE Usuario_id =  ". $_GET["Usuario_id"] ." AND Cultivo_id = ". $_GET["Cultivo_id"] ;



    $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
   
    /*SELECT c.Cultivo_apodo, c.Cultivo_imagen, tc.Tipo_nombre FROM cultivo AS c INNER JOIN Tipo_cultivo AS tc ON c.Tipo_id = tc.Tipo_id WHERE Usuario_id =  " . $_GET["Usuario_id"]*/

?>

 