<?php

    require "conexion.php";

    $idUsuario = $_GET['Usuario_id'];
   
        
    $sql = "SELECT * FROM usuario WHERE Usuario_id = '$idUsuario'" ;
    $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }
    header('Content-Type: application/json');
    echo json_encode($datos);
   
  

?>
