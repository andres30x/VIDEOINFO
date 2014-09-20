<?php
include "conexion.php";  
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['email'];
$nick=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$codigoU=uniqid();
$codigoC=uniqid();
$sql1="INSERT INTO usuario(codigo, nombre,apellido,correo) VALUES ('$codigoU','$nombre','$apellido','$correo')"; 
$sql2="INSERT INTO cuenta(nick,contrasena,cod_usuario) VALUES ('$nick','$contrasena','$codigoU')";
$result1=mysql_query($sql1, $conexion) or die(mysql_error());
$result2=mysql_query($sql2, $conexion) or die(mysql_error());
include "desconectar.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php header("location:index.php"); ?>
</body>
</html>

