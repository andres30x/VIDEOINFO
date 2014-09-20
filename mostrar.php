<?php
include "conexion.php";
						  $sentencia="SELECT NOMBRE,UBICACION,DESCRIPCION FROM VIDEO";
                          $res=mysql_query($sentencia,$conexion) or die(mysql_error());
                          while($fila=mysql_fetch_array($res))
                          {
	                     		echo $fila['NOMBRE']."<br/><video controls src='".$fila['UBICACION']."' ><br/>".$fila['DESCRIPCION'];
                          }
include "desconectar.php";
?>