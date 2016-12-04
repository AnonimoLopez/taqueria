<?php
include 'conexion.php';
$id=$_GET['id'];
$id_user=$_GET['id_user'];

$sql="delete from usuario where id_usuario=".$id;
$x = mysqli_query($link, $sql);	

$sql="delete from personas where id_persona=".$id;
$x = mysqli_query($link, $sql);	


header("location: ad_usuarios.php?x=9&id=".$id_user."");
?>