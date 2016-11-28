<?php

include 'conexion.php';
$id=$_GET['id'];
$id_user=$_GET['id_user'];

$sql="update pedido set estatus=1 where id_pedido=".$id;
if (phpversion()>6){
$x = mysqli_query($link, $sql);	

}else{
$x = mysql_query($sql, $link);	
}
header("location: pedidos.php?x=7&id=".$id_user."");
?>