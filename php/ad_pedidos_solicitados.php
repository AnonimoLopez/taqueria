
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

 $sql="select 
     p.id_pedido as 'clave_producto',
     p.id_producto,
     pr.descripcion as 'Paquete', 
     pr.total as 'precio', 
     e.descripcion as 'tipo',
     p.fecha,
     p.estatus,
     p.id_persona
   from pedido as p, producto as pr, tipo_estatus as e
   where p.id_producto=pr.id_producto and p.estatus=e.id_tipo_estatus
   order by p.fecha Desc"; 
   print $sql;
 $ejec=mysqli_query($link, $sql);

$sql_2 = "select * from tipo_estatus where id_tipo_estatus<3";
$ejec_2 = mysqli_query($link, $sql_2);
$mm = "";
while($row=mysqli_fetch_row($ejec_2)){
$mm.=" <option value='".$row[0]."'>".$row[1]."</option>";
}




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
    ".$row[7]."
    </td>
 	<td>
 	".$row[2]."
 	</td>
 	<td>
 	".$row[3]."
 	</td>
 	<td>
    <div align='center'>
 	<h3 class='btn-warning' >".$row[4]."</h3>
 	</div>
    </td>
 	<td>
 	".$row[5]."
 	</td>
     
    <td>
       <form action='ad_pedidos_solicitados_bd.php?id=".$row[0]."&id_user=".$id."' method='post'>
    <div class='form-group' >
                  <select class='form-control' name='tipo_estatus'>
                   ".$mm."
                  </select>
                </div>
    </td>
    <td>
   
        <input name='boton' class='btn btn-block btn-success btn-lg' value='Guardar' type='submit'>
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
                        <div align="center">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    
                                        <tr>
                                            <th>No. pedido</th>
                                            <th>Clave del paquete</th>
                                            <th>Clave del usuario</th>
                                            <th>Descripción</th>
                                            <th>Total</th>
                                            <th>ESTATUS</th>
                                            <th>Hora</th>
                                            <th>Acciones</th>
                                            <th>Guardar</th>
                                    
                                        </tr>
                                    
                                    </thead>
                                    <tbody>
                                        '.$mostrar.'
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>';
?>

<?php include '../html/import_js.html' ?>
</body>
</html>