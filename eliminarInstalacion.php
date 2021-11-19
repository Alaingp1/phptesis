 <?php

    require "conexion.php";

    $id_Instalacion = $_GET['Instalacion_id'];
   

    $sql = "DELETE FROM instalacion WHERE Instalacion_id= '".$id_Instalacion."'";
    
    $query = $mysqli->query($sql);



?>