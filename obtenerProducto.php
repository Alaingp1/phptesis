<?php

    require "conexion.php";
        
    $sql = "SELECT * FROM producto AS p INNER JOIN categoria_producto AS cp ON p.Categoria_id = cp.Categoria_id";
   
    $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
    //echo json_encode(array("usuarios" => $datos));

?>