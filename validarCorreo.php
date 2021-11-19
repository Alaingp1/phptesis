<?php

require "conexion.php";

$Ucorreo = $_GET['Usuario_correo'];

$sql = "SELECT * FROM usuario WHERE Usuario_correo = '$Ucorreo' AND Usuario_estado = '1' ";

  $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        $datos[] = $resultado;
    }

    header('Content-Type: application/json');
    echo json_encode($datos);

?>