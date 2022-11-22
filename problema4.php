<?php
  //Ejercicio 
  //$Servidor = "localhost";
  //$Usuario = "root";
  //$Password = "";
  //$BaseDeDatos =  "TEST_juez";
  $Servidor = trim(fgets(STDIN));
  $Usuario = trim(fgets(STDIN));
  $Password = trim(fgets(STDIN));
  $BaseDeDatos =  trim(fgets(STDIN));
  $oDB = new baseDatos();
  class baseDatos {
    var $Servidor;
    var $Usuario;
    var $Password;
    var $BaseDeDatos;
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
        rsort($array);
        foreach ($array as $valor) {
          echo $valor.":";
        }
      }
    }
?>