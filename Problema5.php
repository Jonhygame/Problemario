<?php
$Ncasos = trim(fgets(STDIN));
for ($i=0; $i < $Ncasos ; $i++) { 
    $entrada = trim(fgets(STDIN));
    validar($entrada);
}
function validar($entrada) {
    $salida = explode(" ",$entrada);
    var_export ($salida.PHP_EOL);
    if ($entrada<=0) {
        var_export ($salida.PHP_EOL);
    }
}
?>