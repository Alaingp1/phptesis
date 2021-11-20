<?php
 require 'conexion.php';

$idCultivo = $_POST['Cultivo_id'];
$Sensores_nombre = $_POST['Sensores_nombre'];

$sql = "INSERT INTO sensores(Sensores_estado, Sensores_nombre)  values (1,$Sensores_nombre);";

$query = $mysqli->query($sql);


mysqli_insert_id

$lastInsert = $mysqli->mysqli_insert_id($sql);
foreach ($lastInsert as $fila) {
    $vote[] = $fila[0]);		
}

print("ultimo: ". $vote[0]);
$mysqli->query("UPDATE Cultivo SET Sensores_id = $lastInsert where Cultivo_id = $idCultivo");

?>