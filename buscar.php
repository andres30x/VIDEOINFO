<?php
include "conexion.php";
						  $sentencia="SELECT NOMBRE,UBICACION,DESCRIPCION FROM VIDEO WHERE NOMBRE='$buscame'";
                          $res=mysql_query($sentencia,$conexion) or die(mysql_error());
                          while($fila=mysql_fetch_array($res))
                          {
	                     		$nombre=$fila['NOMBRE'];
	                     		$ruta=$fila['UBICACION'];
	                     		$descripcion=$fila['DESCRIPCION'];
                          }
include "desconectar.php";
?>