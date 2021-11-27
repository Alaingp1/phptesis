 <?php

    require "conexion.php";

    $id_Instalacion = $_GET['Instalacion_id'];
   

    $sql = "UPDATE instalacion set Instalacion_estado = 0 WHERE Instalacion_id= '".$id_Instalacion."'";
    
    $query = $mysqli->query($sql);



?>