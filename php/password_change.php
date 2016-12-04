<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		
	</title>
	<?php include '../html/import_css.html' ?>
</head>

<body>
<?php include '../html/menu.php'; 
$error=$_GET['pk'];
if ($error==1){
print '<div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner" align="center">
              <h1>EL USUARIO O CORREO NO EXISTE</h1>
            </div>
            <div class="icon">
               <span class="glyphicon glyphicon-remove"></span>
            </div>
            <a href="#" class="small-box-footer">ACUDA LA INSTALACIONES Y PIDA SU CAMBIO DE CONTRASEÑA. LLEVE SU IDENTIFICACIÓN OFICIAL<i class="fa fa-arrow-circle-right"></i></a>
           </div>
</div>';
}else if ($error==2){
print '<div class="col-lg-12 col-xs-12 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner" align="center">
              <h1>LA SOLICITUD DE CAMBIO DE CONTRASEÑA FUE ENVIADA</h1>
            </div>
            <div class="icon">
               <span class="glyphicon glyphicon-ok"></span>
            </div>
            <a href="#" class="small-box-footer">¡TARDA 24HORAS EN ACEPTARLA. TENGA PACIENCIA!<i class="fa fa-arrow-circle-right"></i></a>
           </div>
</div>';
}
?>

<body class="">

<form action="password_change_bd.php?id=<?php print $id ?>" method="post">

<div class="login-box bg-red">

<div align="center">

<div>
<div class="col-lg-12">
<div class="form-group">
<input type="text" name ="usuario" class="form-control" placeholder="usuario" required>
</div>
</div>
</div>

<div>
<div class="col-lg-12">
<div class="form-group">
<input type="email" name ="correo" class="form-control" placeholder="correo" required>
</div>
</div>
</div>

<div>
<div class="col-lg-12">
<div class="form-group">
<input type="text" name ="password" class="form-control" placeholder="Nueva contraseña" required>
</div>
</div>
</div>

</div>






<div>
<div class="col-lg-12">
<button type="submit" class="btn btn-block btn-warning btn-flat">Solicitar</button>
</div>

</div>
</div>
<?php include '../html/import_js.html' ?>
</body>
</html>