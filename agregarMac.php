<?php
 require 'conexion.php';

$idCultivo = $_POST['Cultivo_id'];
$Sensores_nombre = $_POST['Sensores_nombre'];

$sql = "INSERT INTO sensores(Sensores_estado, Sensores_nombre)  values (1,$Sensores_nombre);";

$query = $mysqli->query($sql);


$sql = "SELECT LAST_INSERT_ID() from sensores";

$lastInsert = $mysqli->query($sql);
print("ultimo: ". $lastInsert);
$mysqli->query("UPDATE Cultivo SET Sensores_id = $lastInsert where Cultivo_id = $idCultivo");

?>