<?php 
include 'conexion.php';

$id=$_GET['id'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$tipo=$_POST['tipo'];



$target_path = "../img_bd/";
//$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
//print $target_path;


$ejec="";

print $_FILES['uploadedfile']['tmp_name'];
if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {


	if ( $_FILES['archivo']['type']=='image/png' ||  $_FILES['archivo']['type']=='image/jpg'  ||  $_FILES['archivo']['type']=='image/jpeg'){

			$sql="insert into producto(descripcion, total, tipo, titulo) values ('".$descripcion."', '".$precio."', '".$tipo."', '".$titulo."') ";
			mysqli_query($link, $sql);
			$id_ultime=mysqli_insert_id($link);
   			
			$ruta = $target_path.'img'.$id_ultime;
   			copy($_FILES['archivo']['tmp_name'], $ruta);
 			
 			$sql="update producto set url='".$ruta."' where id_producto=".$id_ultime."";
 			$ejec=mysqli_query($link, $sql);

	}else{
		print 'ARCHIVO NO SOPORTADO';
	}
}else{
	print 'error';
}




if ($ejec==null){
header("location: administrador.php?z=2&x=8&id=".$id."");
}else {
header("location: administrador.php?z=1&x=8&id=".$id."");
}

?>