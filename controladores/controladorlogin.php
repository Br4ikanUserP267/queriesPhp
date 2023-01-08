<?php 
    
  require("../componentes/conexion.php");
  require("interfazcontrolador.php");

  class ControladorLogin extends 
    ConectarMySQL implements InterfazControlador {

    private $tabla = "usuarios";
     
    public function consultarRegistro($objeto){

      $sql = "Select password from ".$this->tabla." where identificador = ?";
      $sentencia = $this->getConexion()->prepare($sql);
      $sentencia->bind_param("s",$objeto->password);
      $sentencia->execute();
      $resultado = $sentencia -> get_result();
      return $resultado;

    }
  }
?>