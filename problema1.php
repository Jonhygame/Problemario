<?php
//Ejercicio 
    //$Servidor = "localhost";
    //$Usuario = "root";
    //$Password = "";
    //$BaseDeDatos =  "prueba";
    $Servidor = trim(fgets(STDIN));
    $Usuario = trim(fgets(STDIN));
    $Password = trim(fgets(STDIN));
    $BaseDeDatos =  trim(fgets(STDIN));
    $oDB = new baseDatos();
    $oDB->m_imprLista($Servidor, $Usuario, $Password, $BaseDeDatos);
    
    class baseDatos {
        var $Servidor;
        var $Usuario;
        var $Password;
        var $BaseDeDatos;
        var $result;
        var $a_conexion;
        function m_imprLista($Servidor, $Usuario, $Password, $BaseDeDatos){
            $this->Servidor = $Servidor;
            $this->Usuario = $Usuario;
            $this->Password = $Password;
            $this->BaseDeDatos = $BaseDeDatos;
            $this->m_query("SHOW TABLES;");
        }
        function m_conecta() {
            $this->a_conexion = mysqli_connect($this->Servidor,$this->Usuario,$this->Password,$this->BaseDeDatos);                
        }
        function m_desconecta(){
            mysqli_close($this->a_conexion);
        }
        function m_query($pQuery){
            $array = array();
            $this->m_conecta();
            $result = mysqli_query($this->a_conexion, $pQuery);
            $this->m_desconecta();
            $row = $result->fetch_array(MYSQLI_NUM);
            do{
                array_push($array,implode($row));
            }while ($row = $result->fetch_assoc());
            /*rsort($array);
            foreach ($array as $valor) {
                echo $valor.":";
            }*/
            echo "<br></br>";
            rsort($array);
            foreach ($array as $valor) {
                echo $valor.":";
            }
            /*array_push($array, implode($row)."");
            echo implode($row).":";
            echo "<br></br>";
            var_export($array);
            echo "<br></br>";
            rsort($array);
            var_export($array);*/
        }
    }
?>