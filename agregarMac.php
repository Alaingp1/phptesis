<?php
 require 'conexion.php';

$idCultivo = $_POST['Cultivo_id'];
$Sensores_nombre = $_POST['Sensores_nombre'];

$sql = "INSERT INTO sensores(Sensores_estado, Sensores_nombre)  values (1,$Sensores_nombre);";

$query = $mysqli->query($sql);


$sql = "Select LAST_INSERT_ID() from Sensores";
$lastInsert = $mysqli->query($sql);

$addSensor = $mysqli->query("UPDATE Cultivo SET Sensores_id = $lastInsert where Cultivo_id = $idCultivo");

?>