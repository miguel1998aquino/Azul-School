<?php
include ("conexion.php");
$mysqli = db_connect();
//recoger datos del paciente:
$dni = $_GET["dni"];
$fecha = $_GET["fecha"];
$hora = $_GET["hora"];
$espec = $_GET["espec"];
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
</head>
<body>
				

<main class="contenedor seccion contenido-centrado">
        <CENTER> <img src="img/check.png" width="120px" height="80px"/></CENTER>
		<CENTER> <h3>¡SE GENERÓ SU CITA MEDICA EXITOSAMENTE!</h2></CENTER>
        
			<?php
					
			$query = $mysqli -> query ("SELECT r.id_reserva FROM resrva r WHERE r.dni='$dni'");

				if ($valores = mysqli_fetch_row($query)) {
				
			//se despliega el resultado 
			echo "<b> DETALLE DE SU REGISTRO:</b>";
			echo "<br>";
			echo "<b>Cita Nro.: </b> ".$valores[0]."" ;
			echo "<br>";
			echo "<b>DNI:</b> $dni";
			echo "<br>";
			echo "<b>Especialidad: </b>";
			
				switch ($espec) {
				  case 1:
					echo "Cirugia General";
					break;
				  case 2:
					echo "Cardiología";
					break;
				  case 3:
					echo "Dermatología";
					break;
				  case 4:
					echo "Neurologia";
					break;
				  case 5:
					echo "Medicina General";
					break;
				  default:
					echo "Obstetricia";
				}
				
				" ";
			echo "<br>";
			echo "<b>Fecha y Hora:</b> $fecha $hora" ;

			}  
		  
			?>  
<BR>
            <input type="submit" value="INICIO" class="boton boton-verde" onclick="location.href='index.php'">
			 <input type="submit" value="IMPRIMIR" class="boton boton-verde" onclick="window.print();">

              
			   

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