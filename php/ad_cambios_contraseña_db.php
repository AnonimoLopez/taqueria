<?php
include 'conexion.php';
$usuario = $_GET['usuario'];
$password = $_GET['password'];
$correo = $_GET['correo'];
$clave = $_GET['id_usuario'];
$i = $_GET['i'];
$id_=$_GET['id'];
if ($i==1){
$sql="select id_usuario from usuario as u, personas as p where p.id_persona=u.id_usuario and usuario='".$usuario."' and correo='".$correo."'";
print $sql;
$return = mysqli_query($link, $sql);

$id="-1";
while($row=mysqli_fetch_row($return)){
$id=$row[0];
}

if ($id>0){
$sql="update usuario set password='".$password."' where id_usuario=".$id."";
print  $sql;
mysqli_query($link, $sql);
$sql="delete from password_change where id_password_change=".$clave."";
$return = mysqli_query($link, $sql);
print 'CONSULTA REALIZADA';
header("location: ad_cambios_contraseña.php?z=0&x=11&id=".$id_."");
}else{
print 'EL USUARIO NO EXISTE';
}

}else if ($i==2){

$sql="delete from password_change where id_password_change=".$clave."";
$return = mysqli_query($link, $sql);
header("location: ad_cambios_contraseña.php?z=0&x=11&id=".$id_."");
}

?>