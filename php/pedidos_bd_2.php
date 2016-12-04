<?php

include 'conexion.php';
$id=$_GET['id'];
$id_user=$_GET['id_user'];

$sql="update pedido set estatus=1 where id_pedido=".$id;
$x = mysqli_query($link, $sql);	


header("location: pedidos.php?x=7&id=".$id_user."");
?>