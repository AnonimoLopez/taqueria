<?php 
include 'conexion.php';

$id=$_GET['id'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$tipo=$_POST['tipo'];
$sql="insert into producto(descripcion, total, tipo, titulo) values ('".$descripcion."', '".$precio."', '".$tipo."', '".$titulo."') ";
if (phpversion()>6){
$ejec=mysqli_query($link, $sql);
}else{
$ejec=mysql_query($sql, $link);
}

if ($ejec==null){
header("location: administrador.php?z=2&x=8&id=".$id."");
}else {
header("location: administrador.php?z=1&x=8&id=".$id."");
}
?>