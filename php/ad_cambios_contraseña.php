
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        
    </title>
    <?php include '../html/import_css.html' ?>
</head>
<?php include '../html/menu.php' ?>
<body class="">
<?php
 include 'conexion.php';

 $sql="select *
   from password_change 
   where status=0"; 
   print $sql;
 $ejec=mysqli_query($link, $sql);

$mostrar = "";
 while($row=mysqli_fetch_row($ejec)){
    $mostrar.="
    <tr>
    <td>
    ".$row[0]."
    </td>
    <td>
    ".$row[1]."
    </td>
    <td>
    ".$row[2]."
    </td>
    <td>
    ".$row[3]."
    </td>
    <td>
    ".$row[4]."
    </td>
    ";
        $mostrar.= "
        <td>
        <form action='ad_cambios_contraseña_db.php?id=".$id."&i=1&id_usuario=".$row[0]."&usuario=".$row[1]."&correo=".$row[2]."&password=".$row[3]." 'method='post'>
        <input name='boton' class='btn btn-block btn-success btn-lg' value='Aceptar cambio' type='submit'>
        </form>
        </td>
        <td>
         <form action='ad_cambios_contraseña_db.php?id=".$id."&i=2&id_usuario=".$row[0]."&usuario=".$row[1]."&correo=".$row[2]."&password=".$row[3]." 'method='post'>
        <input name='boton' class='btn btn-block btn-warning btn-lg' value='Cancelar cambio' type='submit'>
        </form>
        </td>

        ";
     $mostrar.="</tr>";
 }
     
     print '   <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Clave</th>
                                            <th>Usuario</th>
                                            <th>Correo</th>
                                            <th>Password</th>
                                            <th>Estatus</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        '.$mostrar.'
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>';
?>

<?php include '../html/import_js.html' ?>
</body>
</html>