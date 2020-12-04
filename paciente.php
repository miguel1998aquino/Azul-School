
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
        <B><h2 class="fw-300 centrar-texto">DATOS DEL PACIENTE</h2></B>
        <form  class="contacto" action="grabar_paciente.php" method="POST">
            <fieldset>
                <legend>Información Personal</legend>
				 <label for="dni">D.N.I:</label>
                <input type="text" name="dni" id="dni" placeholder="Tu Apellido"> 
				<input type="submit" value="CONSULTAR" name="consultar" class="boton boton-verde" id="enviar"  />
				</fieldset>
				<fieldset>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nom" id="nombre" placeholder="Tu Nombre">
                <label for="nombre">Apellido:</label>
                <input type="text" name="ape" id="apellido" placeholder="Tu Apellido">
                <label for="telefono">Teléfono:</label>
                <input type="tel" name="tel" id="telefono" placeholder="Tu Teléfono" required>

                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email" placeholder="Tu Correo electrónico" required>
                
                <input type="checkbox"  name="acept" id="acept" required /><label>Acepto las condiciones</label> 

            </fieldset>
            
            <center> <input type="submit" value="SIGUIENTE" name="enviar" class="boton boton-verde" id="enviar"  /></center>

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