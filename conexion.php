<?php
    
    $mysqli = new mysqli("us-cdbr-east-04.cleardb.com","b1754fb2e2045a","028c0b8f","heroku_5201e2f44bc5d2f");
    $mysqli->set_charset("utf8");

    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
       //echo "Conexion exitosa";
    }
    
    ?>