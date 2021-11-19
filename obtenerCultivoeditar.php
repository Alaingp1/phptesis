<?php

    require "conexion.php";

    $idUsuario = $_GET['Usuario_id'];
    $idCultivo = $_GET['Cultivo_id'];
        
    $sql = "SELECT c.Cultivo_apodo, c.Cultivo_imagen, tc.Tipo_nombre, tc.Tipo_id FROM cultivo AS c INNER JOIN Tipo_cultivo AS tc ON c.Tipo_id = tc.Tipo_id WHERE Usuario_id = '$idUsuario' AND Cultivo_id = '$idCultivo'" ;
    $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
   
    /*SELECT c.Cultivo_apodo, c.Cultivo_imagen, tc.Tipo_nombre FROM cultivo AS c INNER JOIN Tipo_cultivo AS tc ON c.Tipo_id = tc.Tipo_id WHERE Usuario_id =  " . $_GET["Usuario_id"]*/

?>

