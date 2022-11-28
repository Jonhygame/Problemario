<?php
$casos = trim(fgets(STDIN));
for ($i=0; $i < intval($casos) ; $i++) { 
    $correo = trim(fgets(STDIN));
    f_validar($correo);
}
function f_validar($s) {
    $s = strtolower($s);
    if(filter_var($s, FILTER_VALIDATE_EMAIL)){
        $final = explode("@",$s);
        echo $final[1].PHP_EOL;
    }else{
        echo "DOMINIO INCORRECTO".PHP_EOL;
    }
}
?>