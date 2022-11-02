<?php
    /*$correo = ""
    function __validar($correo) {
        if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $correo)) {
            echo "El email mi.email.correcto@gmail.com es correcto."; 
          }
    }*/
//Ejercicio 1
    $Servidor = "localhost";
    $Usuario = "root";
    $Password = "";
    $BaseDeDatos =  "mysql";
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
    
        function m_imprLista($Servidor, $Usuario, $Password, $BaseDeDatos){
            $this->Servidor = $Servidor;
            $this->Usuario = $Usuario;
            $this->Password = $Password;
            $this->BaseDeDatos = $BaseDeDatos;
            $this->m_query("SHOW TABLES;");
            
        }
    }
?>