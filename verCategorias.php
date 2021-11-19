<?php 


require "conexion.php";


$sql = "SELECT Categoria_id, Categoria_nombre FROM Categoria_producto";

$query = $mysqli->query($sql);

$datos = array();

while($resultado = $query->fetch_assoc()) {
    $datos[] = $resultado;
}
header('Content-Type: application/json');
echo json_encode($datos);

?>