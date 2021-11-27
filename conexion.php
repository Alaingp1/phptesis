<?php
    
    $mysqli = new mysqli("localhost","root","","lefufuapp2");
    $mysqli->set_charset("utf8");

    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
       //echo "Conexion exitosa";
    }
    
    ?>