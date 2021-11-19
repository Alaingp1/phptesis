<?php

    require "conexion.php";
        
    $sql = "SELECT Tipo_nombre, Tipo_id FROM tipo_cultivo WHERE Tipo_estado = 1";
    $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
    //echo json_encode(array("usuarios" => $datos));

?>