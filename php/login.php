<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Taqueria | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php include '../html/import_css.html' ?>

</head>

<?php include '../html/menu.php';
$error=$_GET['pk'];
if ($error==1){
print '<div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner" align="center">
              <h1>EL USUARIO O CONTRASEÑA INCORRECTO</h1>
            </div>
            <div class="icon">
               <span class="glyphicon glyphicon-remove"></span>
            </div>
            <a href="#" class="small-box-footer">¡Vuelva a intentarlo!<i class="fa fa-arrow-circle-right"></i></a>
           </div>
</div>';
}

 ?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Taqueria</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar tu sesión</p>

    <form action="login_bd.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="usuario" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="registrar.php?x=6&z=0" class="text-center">Registrar</a><br>
    <a href="password_change.php?pk=0&z=0&x=11&id=0" class="text-center">Recuperar contraseña</a>
  </div>
  <!-- /.login-box-body -->
</div>
<?php include '../html/import_js.html' ?>
</body>
</html>
