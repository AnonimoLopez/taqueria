<?php

 $link=mysqli_connect("localhost","root","xxxx") or die('Error al conectarse a mysql: ' . mysql_error());
if (phpversion()>6){
  $db_selected = mysqli_select_db($link,"taqueria") or die ('Error al abrir la base de datos: ' . mysql_error());
}else{
  $link=mysql_connect("localhost","root","xxxxxx") or die('Error al conectarse a mysql: ' . mysql_error());
  $db_selected = mysql_select_db($link, "taqueria" ) or die ('Error al abrir la base de datos: ' . mysql_error());
}



?>
