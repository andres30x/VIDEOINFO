<?php
//DESCONECTANDO LA BD
include "conexion.php";
//RECUPERANDO DATOS POST
session_start();
$usuario_logeado=$_SESSION['userid'];
//VIDEO
$ruta="videos";
$archivo=$_FILES['video']['tmp_name'];
$nombreArchivo=$_FILES['video']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
$ruta=$ruta."/".$nombreArchivo;
//MINIATURAS
$ruta1="miniaturas";
$archivo1=$_FILES['imagen']['tmp_name'];
$nombreArchivo1=$_FILES['imagen']['name'];
move_uploaded_file($archivo1,$ruta1."/".$nombreArchivo1);
$ruta1=$ruta1."/".$nombreArchivo1;
$nombre=mb_strtolower($_POST['nombre']);
$descripcion=mb_strtolower($_POST['descripcion']);
$categoria=mb_strtolower($_POST['categoria']);
//SACANDO CDIGO DE USUARIO
echo $usuario_logeado."<br/>";
$sql="SELECT USUARIO.CODIGO FROM USUARIO INNER JOIN CUENTA ON CUENTA.COD_USUARIO=USUARIO.CODIGO WHERE CUENTA.NICK='$usuario_logeado'" ; 
$sentencia=mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_row($sentencia);  
if ($row[0] != "")    
{
	$codigoU=$row[0];
}
//CREANDO CLAVES PRIMARIAALEATOREAMENTE
$codigoV=uniqid();
$codigoS=uniqid();
echo $codigoV."<br/>";
echo $codigoS."<br/>";
//INSERTANDO VIDEO A LA BD
$consulta1="INSERT INTO VIDEO(CODIGO,NOMBRE,UBICACION,DESCRIPCION,MINIATURA,CATEGORIA) VALUES ('$codigoV','$nombre','$ruta','$descripcion','ruta1','$categoria')";
$consulta2="INSERT INTO SUBIR() VALUES ('$codigoS','$codigoU','$codigoV')";
$sol1=mysql_query($consulta1, $conexion) or die(mysql_error());
$sol2=mysql_query($consulta2, $conexion) or die(mysql_error());
//DESCONECTANDO LA BD
include "desconectar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>SUBIENDO VIDEO</title>
	<meta charset="utf-8"/>
</head>
<body>
<?php 
echo $nombre."<br/>"."<video src=".$ruta." width='320' height='240' autoplay controls >
</video><br/>
Descripcion: ".$descripcion."<br/>
Miniatura: <img src=".$ruta1."><br/>Categoria: ".$categoria."<br/>";
header("location:index.php"); 
?>
</body>
</html>