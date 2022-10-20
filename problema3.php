<?php
$correo = "cona/cad@tigger.gmail.com";
f_validar($correo);
function f_validar($s) {
    if (preg_match('/^[^0-9][a-zA-Z0-9_]+([][a-zA-Z0-9_]+)*[@][trigger.][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $s)) {
        echo "El email ".$s." es correcto."; 
    }else{
        echo "El email ".$s." es incorrecto.";
    }
}
?>