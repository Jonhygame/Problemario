<?php
class baseDatos{
    var $a_conexion;
    var $a_numeRegistros;
    var $a_registros;
    function m_conecta(){
        $this-> a_conexion = mysqli_connect("localhost", "empresa", "12345", "empresaservicios");
        //$this -> m_desconecta();
    }

    function m_desconecta(){
        mysqli_close($this->a_conexion);
    }

    function m_query($consulta){
        $this->a_error=false;
        $this->m_conecta();
        $this->a_registros=mysqli_query($this->a_conexion,$consulta);
        if(mysqli_error($this->a_conexion)>"")
        $this->a_error=true; //hacer otra
        if(strpos(strtoupper($consulta),"SELECT")!==false){
            $this->a_numeRegistros=mysqli_num_rows($this->a_registros);
        }//else{
           // $this->a_numeRegistros=mysqli_affected_rows($this->a_registros);
        //}
        $this->m_desconecta();
    }
    function m_obteRegistro($query){
        $this->m_query($query);
        return mysqli_fetch_array($this->a_registros); // trae el registro como un onjeto

    }
    function recuRegistro(){
        return mysqli_fetch_array($this->a_registros); 
    }
}
$oBD = new baseDatos();
?>