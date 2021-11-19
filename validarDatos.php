 <?php

    require "conexion.php";

    $id_Usuario = $_GET['Usuario_id'];

    $Usuario_direccion = $_POST['Usuario_direccion'];
    $Usuario_telefono = $_POST['Usuario_telefono'];

    $sql = "UPDATE usuario SET "; 
	
	$datos = "";
	
	
	if(!empty($Usuario_direccion)){
		$datos .= "Usuario_direccion = '$Usuario_direccion', ";
	}
	
	if(!empty($Usuario_telefono)){
		$datos .= "Usuario_telefono = '$Usuario_telefono', ";
	}
	
	$datos = rtrim($datos, ", ");
	//$datos = trim($datos);
	//$datos = str_replace(' ', ',', $datos);
    
	$sql .= $datos . "  WHERE Usuario_id = '".$id_Usuario."'"; 

    $query = $mysqli->query($sql);
	
    echo json_encode($query);

?>