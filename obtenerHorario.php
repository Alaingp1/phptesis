<?php

   require "conexion.php";

    $sql = "SELECT h.Horario_inicio, h.Horario_fin FROM usuario 
	INNER JOIN horario_usuario AS h ON usuario.Horario_id = h.Horario_id WHERE usuario.Usuario_id = " . $_GET["Usuarioid"];

    $query = $mysqli->query($sql);

    header('Content-Type: application/json');
    echo json_encode($query->fetch_assoc());
  

?>