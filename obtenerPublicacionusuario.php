<?php

    require "conexion.php";

    $Usuario_id = $_GET['Usuario_id'];
        
    $sql = "SELECT p.Publicacion_nombre, p.Publicacion_descripcion, p.Publicacion_imagen, u.Usuario_nombre, u.Usuario_id, p.Publicacion_id FROM publicacion AS p INNER JOIN usuario AS u ON p.Usuario_id = u.Usuario_id WHERE p.Publicacion_estado = 1 AND u.Usuario_id = $Usuario_id";

   

    $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
  
?>

 