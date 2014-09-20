<?php
	include "conexion.php";
	session_start();
	$buscame=$_POST['archivobuscado'];
	$sentencia="SELECT NOMBRE,UBICACION,CATEGORIA FROM VIDEO WHERE NOMBRE='$buscame'";
	$row=mysql_query($sentencia,$conexion);
	if ($row[0] != "")    
	{  
    	$nombrevideo=$row[0];
    	$ubicacionvideo=$row[1];
    	$categoriavideo=$row[2];
	} 

?>