<?php

$usuario = $_POST ["usuario"]; #con el metodo post traemos el "usuario"
$contrasenia = $_POST ["pass"]; # ahora traemos la "contraseña"

$ckusuario = "admin"; #se usa el "ck" como referencia a check, admin es un string porque esta entre comillas
$ckpass = 1234; # los numeros no son un string

if ($usuario == $ckusuario && $contrasenia == $ckpass) { #si usuario es igual al ckusuraio y contraseña son iguales
    header ("location:https://plataforma.potrerodigital.org/panel/alumno"); #te lleva a una pagina
    
} else { #sino
    echo "Los datos son Incorrectos";
    header ("location:https://web.page/awesome/pixars-404-page/");
    
}

?>