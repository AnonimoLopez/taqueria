<?php 
$x = $_GET['x'];
$id=$_GET['id'];
if ($x == null){
  $x=10;
}
switch ($x) {
  case 1:
    $x1= 'class="active"';
    break;
  case 2:
    $x2='class="active"';
    break;
  case 3:
    $x3= 'class="active"';
    break;
  case 4:
    $x4='class="active"';
    break;
  case 5:
    $x5='class="active"';
    break;
  case 6:
    $x6='class="active"';
    break;
  default:
    header('Location: ../php/inicio.php?x=1');  
    break;
}
?>


<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">LAS PAPAS</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li <?php print $x1 ?> ><a href="../php/inicio.php?x=1">Inicio</a></li>
      <li <?php print $x2 ?> ><a href="../php/paquetes.php?x=2">Paquetes y promociones</a></li>
     <?php //<li <?php print $x3 '? > ><a href="../php/promociones.php?x=3">Promociones</a></li>' ?>
      <li <?php print $x4 ?> ><a href="../php/sucursales.php?x=4">Sucursales</a></li>
    </ul>
 
    <ul class="nav navbar-nav navbar-right">
    <?php if ($id>0) {  
      print '
    <li>
        <div class="lockscreen-item-sm">
    <!-- lockscreen image -->
          <div class="lockscreen-image">
               <img src="../dist/img/user1-128x128.jpg" alt="User Image">
          </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
          <form class="lockscreen-credentials">
               <div class="input-group-sm">
                    <input class="form-control" placeholder="JOSE LOPEZ" type="text" disabled="disabled" >
          </form>
         
    <!-- /.lockscreen credentials -->
        </div>
        <form>
          <button type="button" class="btn btn-block btn-info btn-xs">Salir</button>
         </form>
      </li>
      ';
     }else{
      print '
          <li '.$x5.'><a href="../php/login.php?x=5">LOGIN</a></li>
          <li '.$x6.'><a href="../php/registrar.php?x=6">REGISTRAR</a></li>
          ';
     }?>
    </ul> 




  </div>
</nav>

