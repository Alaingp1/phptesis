<?php

    require "conexion.php";
   
    $Orden_id = $_REQUEST['Orden_id'];
    $Orden_Fecha = $_REQUEST['Orden_Fecha'];

//     $sql = "UPDATE orden SET Orden_Fecha = '".$Orden_Fecha."' WHERE Orden_id = '".$Orden_id."'";
     $sql = "UPDATE orden SET Orden_Fecha = '".$Orden_Fecha."' WHERE Orden_id = '".$Orden_id."'";

   
    	$query = $mysqli->query($sql);
   
    
?>

 