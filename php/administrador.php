
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


<?php
$k=$_GET['z'];
if ($k==1){
print '<div class="col-lg-12 col-xs-12 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner" align="center">
              <h1>REGISTRO EXITOSO</h1>
            </div>
            <div class="icon">
               <span class="glyphicon glyphicon-ok"></span>
            </div>
            <a href="#" class="small-box-footer">¡Bienvenidos!<i class="fa fa-arrow-circle-right"></i></a>
           </div>
</div>';

}else if ($k==2){
print '<div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner" align="center">
              <h1>LO SENTIMOS! ALGO SALIO MAL :C</h1>
            </div>
            <div class="icon">
               <span class="glyphicon glyphicon-remove"></span>
            </div>
            <a href="#" class="small-box-footer">¡Vuelva a intentarlo!<i class="fa fa-arrow-circle-right"></i></a>
           </div>
</div>
';  
}

?>

<body class="">
<form action="administrador_bd.php?id=<?php print $id ?>" method="post">


<div class="login-box bg-red">

<div align="center">

<div>
<div class="col-lg-12">
<div class="form-group">
<input type="text" name ="titulo" class="form-control" placeholder="Titulo" required>
</div>
</div>
</div>


<div class="col-lg-12">
<textarea class="form-control" name ="descripcion" placeholder="Descripcion" rows="3" required></textarea>	
</div>


<div class=" col-lg-12">
	<div class="form-group input-group">
   	 <span class="input-group-addon">
    	<i class="glyphicon glyphicon-usd"></i>
     </span>
    	<input class="form-control" name="precio"  placeholder="PRECIO" type="number" required>
    </div>
</div>

<div class=" col-lg-12">
<div class="form-group input-group">
<select class="form-control" name="tipo" >
  <option value="0">PAQUETE</option>
  <option value="1">PROMOCIÓN</option>
</select>
</div>
</div>

<div>





<div class="col-lg-12">
<button type="submit" class="btn btn-block btn-warning btn-flat">Guardar</button>
</div>

</div>
</div>
</form>
<?php 
include '../html/import_js.html';

/*<div class="form-group col-lg-12">
 <label>Seleción de la imagen</label>
   <input type="file">
 </div>
</div>
*/
 ?>
</body>
</html>