<?php
 require 'conexion.php';

$idCultivo = $_POST['Cultivo_id'];
$Sensores_nombre = $_POST['Sensores_nombre'];

$sql = "INSERT INTO sensores values ('', 1, null,null,'$Sensores_nombre')";

$query = $mysqli->query($sql);

$idSensor = $mysqli->query('SELECT LAST_INSERT_ID() from sensores;');
$addSensor = $mysqli->query("UPDATE Sensores_id = $idSensor where Cultivo_id = $idCultivo");

?>