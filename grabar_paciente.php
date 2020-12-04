<?php
include ("conexion.php");
$mysqli = db_connect();
	
$sql="INSERT INTO paciente VALUES(null,'".$_POST["nom"]."','".$_POST["ape"]."','".$_POST["dni"]."','".$_POST["tel"]."','".$_POST["email"]."','".$_POST["acept"]."')";

    $resultado=mysqli_query($mysqli,$sql) or die ('Error en el query');
    mysqli_close($mysqli);

$dni       = isset($_POST['dni']) ? $_POST['dni'] : "";
$nom       = isset($_POST['nom']) ? $_POST['nom'] : "";
$ape       = isset($_POST['ape']) ? $_POST['ape'] : "";
    header("Location: reserva.php?dni=$dni&nom=$nom&ape=$ape");
	
?>