<?php

    require "conexion.php";
    
    $idcult = $_POST['Cultivo_id'];


    $sql = "UPDATE cultivo SET Cultivo_estado = 0 WHERE Cultivo_id = '$idcult'";
    
   
    $query = $mysqli->query($sql);
    
?>