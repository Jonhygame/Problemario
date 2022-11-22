<?php
$casos = trim(fgets(STDIN));
for ($i=0; $i < intval($casos) ; $i++) { 
    $correo = trim(fgets(STDIN));
    f_validar($correo);
}
function f_validar($s) {
    if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $s)) {
        //echo "El email ".$s." es correcto."; 
        $final = explode("@",$s);
        echo $final[1].PHP_EOL;
    }else{
        echo "DOMINIO INCORRECTO".PHP_EOL;
    }
}
?>