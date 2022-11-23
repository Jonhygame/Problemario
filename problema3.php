<?php
$casos = trim(fgets(STDIN));
for ($i=0; $i < intval($casos) ; $i++) { 
    $correo = trim(fgets(STDIN));
    f_validar($correo);
}
function f_validar($s) {
    if(){
        if(preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/',$s)){
            $final = explode("@",$s);
            echo $final[1].PHP_EOL;
        }else{
            echo "DOMINIO INCORRECTO".PHP_EOL;
        }
    }else{
        echo "DOMINIO INCORRECTO".PHP_EOL;
    }
}
?>