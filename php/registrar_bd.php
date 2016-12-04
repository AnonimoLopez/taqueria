<?php
include 'conexion.php';
$nombre=$_POST["nombre_completo"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$correo=$_POST["email"];
$usuario=$_POST["usuario"];
$password=$_POST["password"];



$sql="select id_usuario from usuario as u, personas as p where p.id_persona=u.id_usuario and (usuario='".$usuario."' or correo='".$correo."')";
print $sql;
$return = mysqli_query($link, $sql);

$id="-1";
while($row=mysqli_fetch_row($return)){
$id=$row[0];
}

if ($id==-1){

$sql_persona="insert into personas(nombre, direccion, telefono, correo) values('".$nombre."', '".$direccion."', '".$telefono."', '".$correo."')";

$id_2=mysqli_query($link, $sql_persona);
$id_ultime=mysqli_insert_id($link);


$sql_usuario="insert into usuario(id_usuario,usuario, password, tipo) values (".$id_ultime.",'".$usuario."', '".$password."', 0)";
print $sql_usuario;
$id=mysqli_query($link, $sql_usuario);



if ($id==null && $id_2==null ){
	header("location: registrar.php?x=6&z=2");
}else{
	header("location: registrar.php?x=6&z=1");
}
}else {
    header("location: registrar.php?x=6&z=3");
}

?>