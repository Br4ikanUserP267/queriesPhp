<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    </head>
    <style>
       body{
           background-color:gray;
       }
    
    </style>
    <body>
        <table id="example" class="table table-bordered table-dark" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>importe</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
                include '../controladores/controladorproducto.php';
                $controladorDatos = new ControladorProducto();
                $resultado = $controladorDatos->consultardatos(); 

                while ($fila = $resultado->fetch_assoc()){?>

                    <tr>
                        <td><?php echo $fila['producto']?></td>
                        <td><?php echo $fila['importe']?></td>
                    </tr>

            <?php }?>
       
    </table>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
    </body>
</html>