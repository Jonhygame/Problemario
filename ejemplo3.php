<?php
fscanf(STDIN, "%d%d", $a, $b);
fwrite(STDOUT,($a+$b).PHP_EOL);
// La constante PHP_EOL agrega un 
// Salto de línea
echo ($a+$b).PHP_EOL;
// La salida puede ser con fwrite o echo
?>