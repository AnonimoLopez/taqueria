<?php 
include 'conexion.php';

$id=$_GET['id'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$correo=$_POST['correo'];




$sql="select id_usuario from usuario as u, personas as p where p.id_persona=u.id_usuario and usuario='".$usuario."' and correo='".$correo."'";
print $sql;
$return = mysqli_query($link, $sql);

$id="-1";
while($row=mysqli_fetch_row($return)){
$id=$row[0];
}


if ($id>0){
$sql="insert into password_change(usuario, password, correo) values ('".$usuario."', '".$password."', '".$correo."') ";

print $sql;
$ejec=mysqli_query($link, $sql);



if ($ejec==null ){
	header("location: registrar.php?x=6&z=2");
}else{
	header("location: password_change.php?pk=2&z=0&x=11&id=0");
}
}else{
	
	header("location: password_change.php?pk=1&z=0&x=11&id=0");
}

?>