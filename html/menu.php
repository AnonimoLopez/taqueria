<?php 
$x = $_GET['x'];
$id=$_GET['id'];
if ($x == null){
  $x=10;
}

if ($id==null){
  print 'id:null';
  $id=-1;
}
include '../php/conexion.php';
$x1="";
$x2="";
$x3="";
$x4="";
$x5="";
$x6="";
$x7="";
$x8="";
$nombre="";
$tipo="-1";
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
  case 7:
    $x7='class="active"';
    break;
  case 8:
    $x8='class="active"';
    break;
  
  default:
    header('Location: ../php/inicio.php?x=1');  
    break;
}

if (phpversion()>6){
if ($id>0){
$sql="select usuario, tipo from usuario where id_usuario=".$id;
$ejec=mysqli_query($link,$sql);
while ($row=mysqli_fetch_row($ejec)) {
  $nombre=$row[0];
  $tipo=$row[1];
}

}
}else{

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
      <li <?php print $x1 ?> ><a href="../php/inicio.php?x=1&id=<?php print $id ?>"      >Inicio</a></li>
      <li <?php print $x2 ?> ><a href="../php/paquetes.php?x=2&id=<?php print $id ?>">Paquetes y promociones</a></li>
     <?php //<li <?php print $x3 '? > ><a href="../php/promociones.php?x=3">Promociones</a></li>' ?>
      <li <?php print $x4 ?> ><a href="../php/sucursales.php?x=4&id=<?php print $id ?>">Sucursales</a></li>
      
      <?php
      if ($tipo==0){
        print '<li '.$x7.'><a href="../php/pedidos.php?x=7&id='.$id.'">PEDIDOS</a></li>';   
      }else if ($tipo == 1){
        print '<li '.$x8.'><a href="../php/administrador.php?z=0&x=8&id='.$id.'">Administrador</a></li>';
      }
      ?>
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
                    <input class="form-control" placeholder="'.$nombre.'" type="text" disabled="disabled" >
          </form>
         
    <!-- /.lockscreen credentials -->
        </div>
        <form>
          <button type="button" onclick="location.href=\'../php/inicio.php?x=1&id=0\'" class="btn btn-block btn-info btn-xs">Salir</button>
         </form>
      </li>
      ';
     }else{
      print '
          <li '.$x5.'><a href="../php/login.php?x=5&id=0">LOGIN</a></li>
          <li '.$x6.'><a href="../php/registrar.php?x=6&z=0&id=0">REGISTRAR</a></li>
          ';
     }?>
    </ul> 




  </div>
</nav>

