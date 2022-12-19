<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTO</title>
    <link rel="stylesheet" href="Contacto.css">
    <link rel="icon" href="../img/contacto.png">
</head>
<?php
include("con_db.php");
?>
<body>
    <header class="header">
        <div class="logo">
            <img src="../img/FotoRecortada.png" alt="Foto mia">
        </div>

        <nav>
            <ul class="nav-links">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../Estudios.php">Estudios</a></li>
                <li><a href="../Experiencia.php">Experiencia</a></li>
            </ul>
        </nav>
            <a href="../Contacto/Contacto.php" class="btn"><button>Contacto</button></a>

            <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

            <div class="overlay" id="mobile-menu">
                <a onclick="closeNav()" href="" class="close">&times;</a>
                <div class="overlay-content">
                    <a href="../index.php">Inicio</a>
                    <a href="../Estudios.php">Mis estudios</a>
                    <a href="../Experiencia.php">Mi experiencia</a>
                    <a href="../Contacto/Contacto.php">Contacto</a>
                </div>

            </div>
    </header>

    <script type="text/javascript" src="../Js/nav.js"></script>

<div>
    <br><br><br>
<center>

    <form class="form" action="EnviarContacto.php" method="post">

    <div class="form_container">
        <h2 class="form_title">Contáctame</h2>

          <input type="text" class="form_input" placeholder="Ingresa tu Nombre" name="Nombre" required>

            <select name="GeneroPersona" class="form_input" required>
                <option selected disabled>Seleccione su genero</option>
                <option value="Mujer">Mujer</option>
                <option value="Hombre">Hombre</option>
            </select>
            
          <input type="number" min="0" maxlength="10" class="form_input" placeholder="Ingresa tu numero telefonico" 
                    name="NumeroTelefonico" oninput="maxlengthNumber(this);" required>

            <select name="TipoPersona" class="form_input" required>
			    <option selected disabled>Tipo de Persona</option>
			    <option value="Juridica">Juridica</option>
			    <option value="Natural">Natural</option>
		    </select>

          <input type="email" class="form_input" placeholder="Ingresa tu email" name="CorreoElectronico" required>

          <textarea type="text" class="form_input form_input--message" placeholder="Ingresa tu mensaje" name="Mensaje" required></textarea>
            
          <div>
            <center>
                <input type="checkbox" name="checkbox" id="info" required>
                <label for="info"><a class="checkbox"> He leido y acepto los </a><a href="" class="checkboxColor">Terminos y condiciones</a></label>
            </center>
          </div>

          <input type="submit" name="register" value="Enviar" class="form_cta">
        </div>

    </form>

</center>
    </div>
    <script>
        function maxlengthNumber(obj){
            if(obj.value.length > obj.maxLength){
                obj.value = obj.value.slice(0, obj.maxLength);
            }
        }
    </script>

    <br><br><br>

    <footer class="footer">
		<div class="contenedor contenedor-footer">
			<div class="footer-text">
				<p>&copy; A D S O - 2022 | Todos los derechos reservados.</p>
			</div>
		</div>
	</footer>

</body>
</html>
