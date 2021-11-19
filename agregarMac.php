<?php
 require 'conexion.php';

$idCultivo = $_POST['Cultivo_id'];
$Sensores_nombre = $_POST['Sensores_nombre'];

$sql = "INSERT INTO sensores(Sensores_estado, Sensores_nombre)  values (1,$Sensores_nombre);";

$query = $mysqli->query($sql);

$idSensor = $mysqli->query("SELECT LAST_INSERT_ID() from sensores;");
var_dump($idSensor);
$addSensor = $mysqli->query("UPDATE Sensores_id = $idSensor where Cultivo_id = $idCultivo");

?>