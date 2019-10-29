<?php
   
    function conectar(){

   $usuario="root"; 
   $password="";
   $basededatos="bd";
   $hostname="localhost";

$mysqli = new mysqli($hostname, $usuario, $password,$basededatos) or die("Error en la conexion".mysql_error());

if ( mysqli_connect_errno() ) {
echo "Error de conexión a la BD: ".mysqli_connect_error();
   

exit();
}
return $mysqli;    
}
?>