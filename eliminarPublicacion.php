<?php

   require "conexion.php";

    $idpub = $_POST['Publicacion_id'];

    $sql = "UPDATE publicacion SET Publicacion_estado = 0 WHERE Publicacion_id = '$idpub'";
    
   
    $query = $mysqli->query($sql);
    


?>