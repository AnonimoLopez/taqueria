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
	
}



if ($id=="" ){
	header("location: login.php?pk=1&x=5&id=0");
}else{
	header("location: inicio.php?x=1&id=".$id."");
}


?>