<?php
include 'conexion.php';
$usuario=$_POST["usuario"];
$password=$_POST["password"];
$sql_usuario="select * from usuario";
$id="";

if (phpversion()>6){
$ejec_usuario=mysqli_query($link, $sql_usuario);
while ($row=mysqli_fetch_row($ejec_usuario)){
		if ($row[1]==$usuario && $row[2]==$password){
			$id=$row[0];
			break;
		}
}
}else{
$ejec_usuario=mysql_query($sql_usuario, $link);
while ($row=mysql_fetch_row($ejec_usuario)){
		if ($row[1]==$usuario && $row[2]==$password){
			$id=$row[0];
			break;
		}
}	
}



if ($id=="" ){
	header("location: registrar.php?x=6&z=2");
}else{
	header("location: inicio.php?x=1&id=".$id."");
}


?>