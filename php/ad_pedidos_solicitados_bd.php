<?php

include 'conexion.php';
$id=$_GET['id'];
$id_user=$_GET['id_user'];
$estatus=$_POST['tipo_estatus'];
//$estatus=1; 
$sql="update pedido set estatus=".$estatus." where id_pedido=".$id;
print $sql;
$x = mysqli_query($link, $sql); 


header("location: ad_pedidos_solicitados.php?x=10&id=".$id_user."");
?>