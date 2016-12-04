
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
   from usuario as u, personas as p where p.id_persona=u.id_usuario and id_usuario!=".$id; 
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
    ".$row[7]."
    </td>
    <td>
    ".$row[8]."
    </td>
    <td>
    <form action='ad_usuarios_bd.php?id=".$row[0]."&id_user=".$id."' method='post'>
        <input name='boton' class='btn btn-block btn-danger btn-lg' value='ELIMINAR' type='submit'>
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
                                            <th>Clave del usuario</th>
                                            <th>Usuario</th>
                                            <th>Contraseña</th>
                                            <th>Tipo</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
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