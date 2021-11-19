<?php

    require "conexion.php";

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $data = array();

        $Usuario_correo = $_POST['Usuario_correo'];
        $Usuario_contrasena = $_POST['Usuario_contrasena'];
        
        $query = mysqli_query($mysqli, "SELECT * FROM usuario WHERE Usuario_correo = '$Usuario_correo' AND Usuario_estado = 1 ");
        
        $resp = mysqli_fetch_array($query);

  



        if (isset($resp) && $resp != null && password_verify($Usuario_contrasena, $resp['Usuario_contrasena'])){
            $data ['msg'] = 'hay datos';
            $data['Usuario_id'] = $resp['Usuario_id'];
           $data['Rol_id'] = $resp['Rol_id'];
            $data['Usuario_correo'] = $resp['Usuario_correo'];
            $data['Usuario_contrasena'] = $resp['Usuario_contrasena'];
            echo json_encode($data);
        } else{
            $data['msg'] = 'no existen datos';
            echo json_encode($data);
            
        }

    
    
    }
    ?>