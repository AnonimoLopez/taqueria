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
<body>
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>TAQUERIA</b></a>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg">REGISTRATE</p>

    <form action="registrar_bd.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name = "nombre_completo" id="nombre_completo" placeholder="Nombre completo" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="direccion" placeholder="Dirección" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="usuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div>
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      
    </form>
   
  </div>
  </div>
  <!-- /.form-box -->
</div>
<?php include '../html/import_js.html' ?>
</body>
</html>