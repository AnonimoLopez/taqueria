<?php
include 'conexion.php';
$nombre=$_POST["nombre_completo"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$correo=$_POST["email"];
$usuario=$_POST["usuario"];
$password=$_POST["password"];
$sql_persona="insert into personas(nombre, direccion, telefono, correo) values('".$nombre."', '".$direccion."', '".$telefono."', '".$correo."')";

$sql_usuario="insert into usuario(usuario, password, tipo) values ('".$usuario."', '".$password."', 0)";

if (phpversion()>6){
$id=mysqli_query($link, $sql_usuario);
$id_2=mysqli_query($link, $sql_persona);
}else{
$id=mysql_query($sql_usuario, $link);
$id_2=mysql_query($sql_persona, $link);
}



if ($id==null && $id_2==null ){
	header("location: registrar.php?x=6&z=2");
}else{
	header("location: registrar.php?x=6&z=1");
}


?>