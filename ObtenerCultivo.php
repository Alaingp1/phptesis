<?php

    require "conexion.php";

    
        
    $sql = "SELECT c.Cultivo_apodo, c.Cultivo_imagen, tc.Tipo_nombre ,c.Cultivo_id , s.Sensores_nombre FROM cultivo AS c INNER JOIN Tipo_cultivo AS tc ON c.Tipo_id = tc.Tipo_id INNER JOIN sensores AS s ON s.Sensores_id = c.Sensores_id WHERE c.Cultivo_estado = 1 AND c.Usuario_id =  " . $_GET["Usuario_id"];



    $querya = $mysqli->query($sql);
    
    $datos = array();
         
    while($resultado = $querya->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
   
    /*SELECT c.Cultivo_apodo, c.Cultivo_imagen, tc.Tipo_nombre FROM cultivo AS c INNER JOIN Tipo_cultivo AS tc ON c.Tipo_id = tc.Tipo_id WHERE Usuario_id =  " . $_GET["Usuario_id"]*/

?>

 