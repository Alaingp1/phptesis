 <?php

    require "conexion.php";

    $id_Usuario = $_GET['Usuario_id'];

    $Usuario_nombre = $_POST['Usuario_nombre'];
    $Usuario_correo = $_POST['Usuario_correo'];
    $Usuario_contrasena = password_hash($_POST['Usuario_contrasena'], PASSWORD_DEFAULT);
    $Usuario_direccion = $_POST['Usuario_direccion'];
    $Usuario_telefono = $_POST['Usuario_telefono'];
    $Usuario_foto = $_POST['Usuario_foto'];
   
 

    /*$sql = "UPDATE usuario SET Usuario_nombre = '".$Usuario_nombre."' , Usuario_correo = '".$Usuario_correo."', Usuario_contrasena = '".$Usuario_contrasena."' , Usuario_direccion = '".$Usuario_direccion."' , Usuario_telefono = '".$Usuario_telefono."', Usuario_foto = '".$Usuario_foto."' WHERE Usuario_id = '".$id_Usuario."'";*/
    
    $sql = "UPDATE usuario SET ";

    $datos = ""; 

    if(!empty($Usuario_nombre)){
      $sql .= "Usuario_nombre = '".$Usuario_nombre."', ";
    } 
    if(!empty($Usuario_correo)) {

       $sql .= "Usuario_correo = '".$Usuario_correo."', ";
    }
    if(!empty($Usuario_contrasena)) {

       $sql .= "Usuario_contrasena = '".$Usuario_contrasena."', ";
    }
    if(!empty($Usuario_direccion)) {

       $sql .= "Usuario_direccion = '".$Usuario_direccion."', ";
    }
    if(!empty($Usuario_telefono)) {

       $sql .= "Usuario_telefono = '".$Usuario_telefono."', ";
    }
    if(!empty($Usuario_foto)) {

       $sql .= "Usuario_foto = '".$Usuario_foto."' ";
    }

    $sql .= $datos. " WHERE Usuario_id = " .$id_Usuario;


   
    $query = $mysqli->query($sql);






    //UPDATE `cultivo` SET `Cultivo_apodo` = 'hola ' WHERE `cultivo`.`Cultivo_id` = 21;

    //  

?>