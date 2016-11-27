<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		
	</title>
	<?php include '../html/import_css.html' ?>
    <style type="text/css">
<!--
.inputcentrado {
   text-align: center
   }
-->
</style>
</head>
<?php 
include '../html/menu.php';


?>




<body class="">

<?php
include 'conexion.php';

if (phpversion()>6){

    $sql="select titulo, descripcion, total, id_producto from producto where tipo=0";

    $resul = mysqli_query($link, $sql);
$i=1; 
$l=1;
$p=3;
$z1='';
    while($row=mysqli_fetch_row($resul)){

      if ($i==$l) $z1.='<div class="row">';

               $z1.=' <div class="col-lg-4">
                            <div class="panel panel-primary">
                                
                                <div class="panel-heading">
                                    '.$row[0].'
                                </div>

                               <div class="panel-body">
                                    
                                    <div class="lockscreen-item-sm">
                                    <ul>
                                    <h3>
                                        <li>'.$row[1].'</li>    
                                    </h3>
                                    <img src="../img/img1.jpg" alt="..." class="img-thumbnail">
                                    </ul>
                                    </div>
                                </div>


                              <div class="panel-footer">
                                      <h1><p class="text-light-blue">COSTO: $'.$row[2].'</p><h1>
                             ';
                                 if ($tipo==0){
                                      $z1.= '
                                      <form action="pedidos_bd.php?clave_usuario='.$id.'&clave_pedido='.$row[3].'" method="post">
                                       <input type="text" value="'.$row[3].'" name="clave_pedido"          class="form-control inputcentrado" disabled="disabled">
                                           <input type="submit" name="boton" class="btn btn-block btn-danger btn-lg"        value="Pedir">
                                       </form>
                             </div>';
                            $z1.='
                                  </div>
                   </div>';
                          }else{
                        $z1.= ' 
                             </div>
                            </div>
                   </div>';
                          }
          if ($i==$p) $z1.= '</div>';
          
          if ($i==$p) {
            $l+=3;
            $p+=3;
          }

       
         $i=$i+1;

              
    }
    if ($p>$i)$z1.= '</div>';

   


}else{
 print 'Hola';
}
 print $z1;
print '<div class="alert alert-info">
                               <h1><p align="center">PROMOCIONES</p><h1>
                            </div>';


if (phpversion()>6){

    $sql="select titulo, descripcion, total, id_producto from producto where tipo=1";

    $resul = mysqli_query($link, $sql);
$i=1; 
$l=1;
$p=2;
$z1='';
    while($row=mysqli_fetch_row($resul)){

      if ($i==$l) $z1.='<div class="row">';

               $z1.=' <div class="col-lg-6">
                            <div class="panel panel-primary">
                                
                                <div class="panel-heading">
                                    '.$row[0].'
                                </div>

                               <div class="panel-body">
                                    
                                    <div class="lockscreen-item-sm">
                                    <ul>
                                    <h3>
                                        <li>'.$row[1].'</li>    
                                    </h3>
                                    <img src="../img/img1.jpg" alt="..." class="img-thumbnail">
                                    </ul>
                                    </div>
                                </div>


                              <div class="panel-footer">
                                      <h1><p class="text-light-blue">COSTO: $'.$row[2].'</p><h1>
                             ';
                                 if ($tipo==0){
                                      $z1.= '
                                      <form action="pedidos_bd.php?clave_usuario='.$id.'&clave_pedido='.$row[3].'" method="post">
                                       <input type="text" value="'.$row[3].'" name="clave_pedido"          class="form-control inputcentrado" disabled="disabled">
                                           <input type="submit" name="boton" class="btn btn-block btn-danger btn-lg"        value="Pedir">
                                       </form>
                             </div>';
                            $z1.='
                                  </div>
                   </div>';
                          }else{
                        $z1.= ' 
                             </div>
                            </div>
                   </div>';
                          }
          if ($i==$p) $z1.= '</div>';
          
          if ($i==$p) {
            $l+=2;
            $p+=2;
          }

       
         $i=$i+1;

              
    }
    if ($p>$i)$z1.= '</div>';

   


}else{
 print 'Hola';
}
 print $z1;
 

 include 'conexion.php';
 print '
</body>
</html>';
 
 ?>