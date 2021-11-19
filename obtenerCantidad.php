<?php

    require "conexion.php";
        
    $sql = "SELECT Producto_stock FROM producto WHERE Producto_id =  " . $_GET["Producto_id"];
    $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
    //echo json_encode(array("usuarios" => $datos));

?>