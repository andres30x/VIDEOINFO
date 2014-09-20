<?php 
include "conexion.php";
$login=$_SESSION['login']=true;
$nick=mb_strtolower($_POST['nick']);
$contrasena=mb_strtolower($_POST['contrasena']);
$result=null;
$result1=null;
$sql = "SELECT * FROM usuario inner join cuenta ON cuenta.cod_usuario=usuario.codigo WHERE nick='$nick' and cuenta.contrasena='$contrasena'; "; 
$rec = mysql_query($sql); 
$count = 0; 
$row=mysql_fetch_row($rec);  
if ($row[0] != "")    
{  
    $count++;
    if(isset($login)) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado 
    { 
            if($count == 1)
            { 
                    /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/ 
                    session_start();
                    $_SESSION['userid'] = $row[6]; 
                    $_SESSION['estado'] = true;
                    header("location:index.php"); 
            } 
            else 
            { 
                    echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; //Si la función verificar_login() no pasa, que se muestre un mensaje de error.  
            }
    }
} 
else{echo "error";}
?> 
