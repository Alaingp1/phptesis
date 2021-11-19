<?php

    require "conexion.php";
    $nombrefiltro = $_GET['Producto_nombre'];

    $sql = "SELECT p.Producto_id, p.Categoria_id, p.Producto_nombre, p.Producto_descripcion, p.Producto_precio, p.Producto_stock, p.Producto_foto, cp.Categoria_nombre FROM producto AS p INNER JOIN categoria_producto AS cp ON p.Categoria_id = cp.Categoria_id WHERE p.Producto_nombre LIKE '%$nombrefiltro%' AND p.Producto_estado = 1";

    $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
    
    ?>