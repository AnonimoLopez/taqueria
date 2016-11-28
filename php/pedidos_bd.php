<?php

include 'conexion.php';
$clave_usuario=$_GET['clave_usuario'];
$clave_pedido=$_GET['clave_pedido'];


print 'hola'.$clave_pedido;
print 'hola2'.$clave_usuario;


$sql="insert into pedido (id_persona, id_producto, fecha, estatus) values (".$clave_usuario.", ".$clave_pedido.", now(), 3)";

print $sql;

if (phpversion()>6){
$ejec=mysqli_query($link, $sql);

}else{
$ejec=mysql_query($sql, $link);	
}

header("location: pedidos.php?x=7&id=".$clave_usuario."");
?>