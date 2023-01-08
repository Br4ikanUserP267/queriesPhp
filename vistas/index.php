
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Iniciar Sesión</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <div class="contenedor">
        <form action="../test/testlogin.php" method="POST">
          <h3>Inicio de Sesión</h3>
          <div>
            Usuario
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
          </div>

          <div style="margin-top: 0.8em;">
            Contraseña
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <button type="submit" class="btn btn secondary" style="border-radius: 1em;margin-top: 0.8em;">Ingresar</button>
          
        </form>
        
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html>