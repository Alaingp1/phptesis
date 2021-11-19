<?php

    require "conexion.php";


    $Usuario_correo = $_GET['Usuario_correo'];
    $Usuario_contrasena = password_hash($_POST['Usuario_contrasena'], PASSWORD_DEFAULT);
   
 

    $sql = "UPDATE usuario SET  Usuario_contrasena = '".$Usuario_contrasena."'  WHERE Usuario_correo = '".$Usuario_correo."'";
    

   
    $query = $mysqli->query($sql);






    //UPDATE `cultivo` SET `Cultivo_apodo` = 'hola ' WHERE `cultivo`.`Cultivo_id` = 21;

    //  

?>