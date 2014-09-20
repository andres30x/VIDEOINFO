<?php
function limpiar($cadena)
     {
        $cadena = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/i",$cadena);
        $cadena = trim($cadena);
        $cadena = strip_tags($cadena);
        $cadena = addslashes($cadena);
        $cadena= mb_strtolower($cadena);
        return $cadena;
     } 
?>