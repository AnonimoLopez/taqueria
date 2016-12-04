<?php

include 'conexion.php';
$clave_usuario=$_GET['clave_usuario'];
$clave_pedido=$_GET['clave_pedido'];


print 'hola'.$clave_pedido;
print 'hola2'.$clave_usuario;


$sql="delete from producto where id_producto=".$clave_pedido;

print $sql;

$ejec=mysqli_query($link, $sql);



header("location: paquetes.php?x=2&id=".$clave_usuario."");
?>