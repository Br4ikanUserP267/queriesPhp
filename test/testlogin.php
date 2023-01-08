<?php

    require("../modelos/usuario.php");
    require("../controladores/controladorlogin.php");
    $usuario = new Usuario($_POST['usuario'],$_POST['password']);
    $controladorLogin = new ControladorLogin();

    $resultado = $controladorLogin->consultarRegistro($usuario);
  
    if ($resultado->num_rows == 0 ) {

        echo 'El usuario no existe ';

    } else {

        $fila = $resultado->fetch_assoc();
        $tipo = $fila['password'];
        
        if ($_POST['password'] == $tipo)
            header('Location: ../vistas/vistaproducto.php');
        else
            echo "No se puede acceder";

    }    


    








?>