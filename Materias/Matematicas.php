<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOJA DE VIDA</title>
    <link rel="stylesheet" href="../Css/Experiencia.css">
    <script src="https://kit.fontawesome.com/629d054346.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/contacto.png">
</head>
    <?php   
        require_once("../Datos/DatosExperiencia.php");
        Datos4($InfoMatematicas);
    ?>
<body>
    <header class="header">
        <div class="logo">
            <img src="../img/FotoRecortada.png" alt="Foto mia">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="../Index.php">Inicio</a></li>
                <li><a href="../Estudios.php">Estudios</a></li>
                <li><a href="../Experiencia.php">Experiencia</a></li>
            </ul>
        </nav>
            <a href="../Contacto/Contacto.php" class="btn"><button>Contacto</button></a>

            <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

            <div class="overlay" id="mobile-menu">
                <a onclick="closeNav()" href="" class="close">&times;</a>
                <div class="overlay-content">
                    <a href="../Index.php">Inicio</a>
                    <a href="../Estudios.php">Estudios</a>
                    <a href="../Experiencia.php">Experencia</a>
                    <a href="../Contacto/Contacto.php">Contacto</a>
                </div>
            </div>
    </header>

    <script type="text/javascript" src="../Js/nav.js"></script>

    <div class= "Cuerpo">
                    
    <main class= contenido >
        <center><h1 class="Titulo"><?php echo $InfoMatematicas[0]['Titulo']; ?></h1></center>
        <br>
        <p class="Texto"><?php echo $InfoMatematicas[0]['TextoTitulo']; ?></p>
        <br>
        <p class="Texto"><?php echo $InfoMatematicas[0]['TextoElectricidad1']; ?></p><br>
        <ul>
        <li><p class="Texto"><?php echo $InfoMatematicas[0]['TextoElectricidad2']; ?></p></li><br>
        <li><p class="Texto"><?php echo $InfoMatematicas[0]['TextoElectricidad3']; ?></p></li>
        </ul><br><br><br>
        <center><?php echo $InfoMatematicas[0]['ImagenElectricidad']; ?></center><br><br>
    </main>
    
    <aside class= sidebar >
        <ul class="ListaMaterias">
            <li><h1 class="TituloMaterias"><?php echo $InfoMatematicas[0]['SubTitulo']; ?></h1></li><br><br>
            <li><hr style="width: 100%;"></li><br><br>
            <li><a href="Electricidad.php" class="TextoLista">Electricidad</a></li><br>
            <li><a href="Emprendimiento.php" class="TextoLista">Emprendimiento</a></li><br>
            <li><a href="Etica.php" class="TextoLista">Etica</a></li><br>
            <li><a href="Tecnologo.php" class="TextoLista">Tecnologo</a></li><br>
            <li><a href="../Glosario/Glosario.php" class="TextoLista">Glosario</a></li><br>
        </ul>
    </aside>
        <div class= widget-1 >
            <p><?php echo $InfoMatematicas[0]['Widget-1']; ?></p>
        </div>
        <div class= widget-2 >
            <p><?php echo $InfoMatematicas[0]['Widget-2']; ?></p>
        </div>
        
    </div>    

    <footer class="footer">
		<div class="contenedor contenedor-footer">
			<div class="footer-text">
				<p>&copy; <?php echo $InfoMatematicas[0]['Footer']; ?></p>
			</div>
		</div>
	</footer>
</body>

</html>