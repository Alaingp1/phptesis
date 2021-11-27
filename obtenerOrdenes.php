<?php

	require 'conexion.php';


	$sql = "SELECT o.Orden_Fecha, o.Orden_cantidad_productos, p.Producto_id, do.Detalle_fecha, u.Usuario_nombre, p.Producto_nombre,o.Orden_id, p.Producto_precio FROM detalle_orden AS do INNER JOIN orden AS o ON do.Orden_id = o.Orden_id INNER JOIN producto AS p ON do.Producto_id = p.Producto_id INNER JOIN usuario AS u ON o.Usuario_id = u.Usuario_id  WHERE u.Usuario_id = " . $_GET["Usuario_id"];

	

    $query = $mysqli->query($sql);
    
    $datos = array();
        

    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
    



?>