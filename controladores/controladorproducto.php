<?php 
    
  require("../componentes/conexion.php");

  class ControladorProducto extends ConectarMySQL {

    public function consultardatos(){
  
      $sql = "select product.Name producto, sum(salesorderdetail.LineTotal) importe 
      from product, salesorderdetail where product.ProductID = salesorderdetail.ProductID group by 1;";
      $sentence = $this->getConexion()->prepare($sql);
      $sentence->execute();
      $result = $sentence->get_result();
      return $result;

    }
  }
?>