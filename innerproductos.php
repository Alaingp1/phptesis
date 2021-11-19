<?php 

require "conexion.php";

//$idp = $_POST['PRODUCTO_ID'];
$sql = "SELECT p.Producto_id, p.Producto_nombre, p.Producto_descripcion, p.Producto_precio, p.Producto_estado, p.Producto_stock, p.Producto_foto, p.Categoria_id, ct.Categoria_nombre  FROM producto AS p INNER JOIN categoria_producto as ct ON p.Categoria_id = ct.Categoria_id WHERE p.Producto_estado = 1"; 
$query = $mysqli->query($sql);
$mysqli->set_charset("utf8");


$datos = array();

while($resultado = $query->fetch_assoc()) {
    $datos[] = $resultado;
}
header('Content-Type: application/json');
echo json_encode($datos);
//echo json_encode(array("usuarios" => $datos));

?>