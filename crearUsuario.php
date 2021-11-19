<?php

    require "conexion.php";
   
    $Usuario_nombre = $_POST['Usuario_nombre'];
    $Usuario_correo = $_POST['Usuario_correo'];
    $Usuario_contrasena = password_hash($_POST['Usuario_contrasena'], PASSWORD_DEFAULT);
    $Usuario_direccion = $_POST['Usuario_direccion'];
    $Usuario_telefono = $_POST['Usuario_telefono'];

    

    $sql = "INSERT INTO usuario VALUES('',2, null, '$Usuario_nombre', '$Usuario_correo', '$Usuario_contrasena', '$Usuario_direccion', '$Usuario_telefono', 1, null)";

    echo $sql;
    
    $query = $mysqli->query($sql);

    
    
?>
	