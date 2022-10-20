<?php
//Ejercicio 
    //$Servidor = "localhost";
    //$Usuario = "root";
    //$Password = "";
    //$BaseDeDatos =  "mysql";
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
        var $a_resultado;
        var $solucion;
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
            $this->m_conecta();
            $result = mysqli_query($this->a_conexion, $pQuery);
            $this->m_desconecta();
            $row = mysqli_fetch_array($result);
            while ($row = $result->fetch_assoc()) {
                echo implode($row).":";
            }
        }
    }
?>