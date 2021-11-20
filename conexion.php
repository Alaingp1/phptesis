<?php
    
    $mysqli = new mysqli("localhost","root","","db_indostatuspruebas");
    $mysqli->set_charset("utf8");

    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
       //echo "Conexion exitosa";
    }
    
    ?>