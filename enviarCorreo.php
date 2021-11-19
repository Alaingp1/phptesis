<?php



	$para      = 'esteban.guicharrousse@gmail.com';
        $titulo    = 'Correo de contacto - lefufu';
        $mensaje   = 'esta WEA funciona';
        $cabeceras = 'From: ' . 'alaingonzalezpavez@gmail.com' . "\r\n" .
            'Content-type:text/html;charset=UTF-8'; 

var_dump(mail($para, $titulo, $mensaje, $cabeceras));
     
/*if (mail($para, $titulo, $mensaje, $cabeceras)) {
    echo "Email successfully sent to $para...";
} else {
    echo "Email sending failed...";
}*/

?>