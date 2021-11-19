<?php

    require "conexion.php";
        
   $sql = "SELECT i.Instalacion_id, c.Usuario_nombre, c.Usuario_direccion, p.Producto_nombre ,o.Orden_cantidad_productos, o.Orden_Fecha FROM instalacion AS i 
    INNER JOIN orden AS o ON i.Orden_id = o.Orden_id INNER JOIN detalle_orden AS det ON det.Orden_id = o.Orden_id INNER JOIN producto AS p ON det.Producto_id = p.Producto_id 
    INNER JOIN usuario AS c ON o.Usuario_id = c.Usuario_id WHERE i.Usuario_id = ". $_GET["Usuarioid"]." AND o.Orden_fecha = curdate() AND i.Instalacion_estado = 1";


    $query = $mysqli->query($sql);
    
    $datos = array();
        //var_dump($query->fetch_assoc());

    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
    //echo json_encode(array("usuarios" => $datos));

?>