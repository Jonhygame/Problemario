<?php 
$line = trim(fgets(STDIN));
$datos=explode(" ",$line);
echo ($datos[0]+$datos[1]);
for($i=2;$i<count($datos);$i++){
    echo " ".($datos[$i]);
}
?>