<?php

// Funcion para conexion a la BD
 function db_connect() {
 $dbhost = "localhost"; // El host
 $dbuser = "root"; // El usuario
 $dbpass = ""; // El Pass
 $db = "posta"; // Nombre de la base
 $mysqli = new mysqli($dbhost, $dbuser,$dbpass, $db);
 if ($mysqli -> connect_errno) {
 die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());
 }
 return $mysqli;
}
  //validar datos en campos
//function filtrado($datos){
    //$datos = trim($datos); // Elimina espacios antes y después de los datos
    //$datos = stripslashes($datos); // Elimina backslashes \
   // $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
//return $datos;
//}

?>




