<?php 
include 'conexion.php';

$id=$_GET['id'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$tipo=$_POST['tipo'];
if (phpversion()>6){
$sql="insert into producto(descripcion, total, tipo, titulo) values ('".$descripcion."', '".$precio."', '".$tipo."', '".$titulo."') ";
$ejec=mysqli_query($link, $sql);

if ($ejec==null){
header("location: administrador.php?z=2&x=8&id=".$id."");
}else {
header("location: administrador.php?z=1&x=8&id=".$id."");
}


}else{

}
?>