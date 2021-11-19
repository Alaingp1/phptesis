 <?php

    require "conexion.php";

    $id_Instalacion = $_GET['Instalacion_id'];
   

    $sql = "UPDATE instalacion SET Instalacion_estado = '2' WHERE Instalacion_id= '".$id_Instalacion."'";
    
    $query = $mysqli->query($sql);



?>