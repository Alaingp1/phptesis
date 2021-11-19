<?php

   require "conexion.php";

    $sql = "SELECT * FROM datos_de_la_empresa";
    $query = $mysqli->query($sql);

    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
    //echo json_encode(array("usuarios" => $datos));


?>