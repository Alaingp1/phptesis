<?php

    require "conexion.php";

    
        
<<<<<<< HEAD
    $sql = "SELECT c.Cultivo_apodo, c.Cultivo_imagen, tc.Tipo_nombre ,c.Cultivo_id , s.Sensores_nombre FROM cultivo AS c INNER JOIN Tipo_cultivo AS tc ON c.Tipo_id = tc.Tipo_id INNER JOIN sensores AS s ON s.Sensores_id = c.Sensores_id WHERE Cultivo_estado = 1  AND Usuario_id =  " . $_GET["Usuario_id"];
=======
    $sql = "SELECT c.Cultivo_apodo, c.Cultivo_imagen, tc.Tipo_nombre ,c.Cultivo_id , s.Sensores_nombre FROM cultivo AS c INNER JOIN Tipo_cultivo AS tc ON c.Tipo_id = tc.Tipo_id INNER JOIN sensores AS s ON s.Sensores_id = c.Sensores_id WHERE c.Cultivo_estado = 1 AND c.Usuario_id =  " . $_GET["Usuario_id"];
>>>>>>> b512fbbafe8fff2d22228ebb93e0a0030006318c



    $querya = $mysqli->query($sql);
    
    $datos = array();
         
    while($resultado = $querya->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
   
    /*SELECT c.Cultivo_apodo, c.Cultivo_imagen, tc.Tipo_nombre FROM cultivo AS c INNER JOIN Tipo_cultivo AS tc ON c.Tipo_id = tc.Tipo_id WHERE Usuario_id =  " . $_GET["Usuario_id"]*/

?>

 