<?php

    require "conexion.php";
        
    $sql = "SELECT * FROM usuario WHERE Usuario_id =  " . $_GET["Usuario_id"];
    $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
    //echo json_encode(array("usuarios" => $datos));

?>