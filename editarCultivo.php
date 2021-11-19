 <?php

    require "conexion.php";

    $id_Usuario = $_POST['Usuario_id'];
    $id_Cultivo = $_POST['Cultivo_id'];
    $Cultivo_apodo = $_POST['Cultivo_apodo'];
    $idtipo = $_GET['Tipo_id'];
    $Cultivo_imagen = $_POST['Cultivo_imagen'];
   
 

    $sql = "UPDATE cultivo SET Tipo_id = '".$idtipo."', Cultivo_apodo = '".$Cultivo_apodo."', Cultivo_imagen = '".$Cultivo_imagen."' WHERE Cultivo_id = '".$id_Cultivo."'";
    
    $query = $mysqli->query($sql);




    //UPDATE `cultivo` SET `Cultivo_apodo` = 'hola ' WHERE `cultivo`.`Cultivo_id` = 21;

?>