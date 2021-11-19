<?php

    require "conexion.php";
   
    $Usuario_id = $_REQUEST['Usuario_id'];
    $Orden_Fecha = $_REQUEST['Orden_Fecha'];
    $Orden_cantidad_producto = $_REQUEST['Orden_cantidad_producto'];
    $Producto_id = $_REQUEST['Producto_id'];
       
    $sql = "INSERT INTO `orden` VALUES (NULL,'$Usuario_id', '$Orden_Fecha ','$Orden_cantidad_producto', 1)";
    $query = $mysqli->query($sql);
    
    $sql = "SELECT o.Orden_id FROM orden AS o WHERE o.Usuario_id = $Usuario_id ORDER BY o.Orden_id DESC LIMIT 1";
    $query = $mysqli->query($sql);
        $dato =  $query->fetch_assoc();
    $str = implode($dato);
    var_dump($str); 
  
    $sql = "INSERT INTO detalle_orden VALUES(null, '$Producto_id', '$str', current_timestamp)";

        $query = $mysqli->query($sql);

    $sql = "UPDATE producto SET Producto_stock = Producto_stock - $Orden_cantidad_producto where Producto_id = $Producto_id";

        $query = $mysqli->query($sql);
    
    
?>