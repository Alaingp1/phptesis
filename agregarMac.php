<?php
 require 'conexion.php';

$idCultivo = $_POST['Cultivo_id'];
$Sensores_nombre = $_POST['Sensores_nombre'];

$sql = "INSERT INTO sensores(Sensores_estado, Sensores_nombre)  values (1,'$Sensores_nombre');";

$query = $mysqli->query($sql);
$mysqli -> query($sql);

$last = $mysqli -> insert_id;

print("ultimo: ". $last);
$mysqli->query("UPDATE Cultivo SET Sensores_id = $last where Cultivo_id = $idCultivo");

?>