<?php
include ("conexion.php");
$mysqli = db_connect();

//recoger datos del paciente:
$dni = $_GET["dni"];
$nom = $_GET["nom"];
$ape = $_GET["ape"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
<?php
header( 'Cache-Control: no-store, no-cache, must-revalidate' ); 
header( 'Cache-Control: post-check=0, pre-check=0', false ); 
header( 'Pragma: no-cache' ); 
?>

</head>
<body>


    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">RESERVA DE CITA MEDICA</h2>
			<h5> Paciente: <?php echo "$nom $ape";?></h5>
        <form class="contacto" action="" method="POST">
                <fieldset>

                <legend> Información de la Consulta Medica: </legend>
				<label for="dni">D.N.I:</label>
                <input type="text" name="dni" id="dni" value = "<?php echo $dni; ?>" disabled= "disabled">
				<label for="opciones">Especialidad</label>
				<select name="espec" id="opciones">
				<option value="" disabled selected>-- Seleccione --</option>
                <?php
				$query = $mysqli -> query ("SELECT * FROM area");
				while ($valores = mysqli_fetch_array($query)) {
				echo '<option value="'.$valores[id-Area].'">'.$valores[especialidad].'</option>';
				}
                ?>
                </select>
   
                 <label for="opciones">Turno</label>
                <select name="turno" id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <?php				
				$query = $mysqli -> query ("SELECT * FROM turno");
				while ($valores = mysqli_fetch_array($query)) {
				echo '<option value="'.$valores[id-turno].'">'.$valores[descripcion].'</option>';
				}
                ?>
                </select>

               <label for="hora">Hora:</label>
                <input name="hora" type="time" id="hora" min="09:00" max="18:00">

                <label for="fecha">fecha:</label>
                <input name="fecha" type="date" id="fecha" >

               
            <input type="submit" name="reserva" value="GRABAR"  id="reserva">
		
			</fieldset>
        </form>
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2019 &copy; </p>
        </div>
    </footer>
</body>
</html>
<?php
if(isset($_POST["reserva"])) 
{
$espec = $_POST["espec"];
$turno = $_POST["turno"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];

$sql="INSERT INTO resrva VALUES(null,'".$_GET["dni"]."','$espec','$turno','$fecha','$hora')";

$resultado=mysqli_query($mysqli,$sql) or die ('Error en el query');

echo "<script>alert('¡Su Cita Médica se registró con EXITO!');window.location.href='reservaOK.php?dni=$dni&fecha=$fecha&hora=$hora&espec=$espec';</script>";
	mysqli_close($mysqli);
	
	}

?>