<?php
   function connectDB(){

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "posta";


    $conexion = mysqli_connect($server, $user, $pass,$bd) 
        or die("Error en la base de datos");

    return $conexion;
	
	
	function disconnectDB($conexion){

    $cerrardb = mysqli_close($conexion) 
        or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

    return $cerrardb;
}

?>




