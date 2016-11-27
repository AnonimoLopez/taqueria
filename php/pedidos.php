
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
     p.estatus
   from pedido as p, producto as pr, tipo_estatus as e
   where p.id_producto=pr.id_producto and p.estatus=e.id_tipo_estatus and p.id_persona=".$id; 
   print $sql;
if (phpversion()>6){
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
 	<td>
 	".$row[5]."
 	</td>
 	";

 	$fecha=$row[5];
    $segundos=strtotime($fecha) - strtotime('now');
    $diferencia_dias=intval($segundos/60/60/24);
    
    if ($diferencia_dias<1 && $row[6]==3){
    date_default_timezone_set('America/Mexico_City');
   
    $date = date_create($row[5]);
    $date=date_format($date, 'H:i');
    
    $date2 = date_create(date('m/d/Y g:ia'));
    $date2=date_format($date2, 'h:i');
 
    $dif=date("i", strtotime("00:00:00") + strtotime($date2) -strtotime($date));
     
    if ($dif<6){
    	$mostrar.= "
    	<td>
    	<form action='pedidos_bd_2.php?id=".$row[0]."&id_user=".$id."' method='post'>
    	<input name='boton' class='btn btn-block btn-danger btn-lg' value='Cancelar' type='submit'>
    	</form>
    	</td>

    	";
    }else $mostrar.= "<td></td>";
	
    }else{
    	$mostrar.= "<td></td>";
    }
     $mostrar.="</tr>";
    
 
 }

	


}else{

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
                                            <th>No. pedido</th>
                                            <th>Clave del paquete</th>
                                            <th>Descripción</th>
                                            <th>Total</th>
                                            <th>Estatus</th>
                                            <th>Hora</th>
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
                </div>
';
?>
<?php include '../html/import_js.html' ?>
</body>
</html>