
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOSARIO</title>
    <link rel="stylesheet" href="Glosario.css">
    <script src="https://kit.fontawesome.com/629d054346.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/contacto.png">
</head>
    <?php

        include("con_db.php");

        $DatosGlosario = "SELECT * FROM glosario";

        require_once("./DatosGlosario.php");
        Datos_a_Preparar($InfoGlosario);
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
                    <a href="../Estudios.php">Estudios</a>
                    <a href="../Experiencia.php">Experiencia</a>
                    <a href="../Contacto/Contacto.php">Contacto</a>
                </div>
            </div>         
    </header>

    <script type="text/javascript" src="../Js/nav.js"></script>
    <br><br><br>
   
<table>
    <tr>
        <th class = CTabla>Numero</th>
        <th>Palabra</th>
        <th>Significado</th>
        <th>Ilustracion</th>
    </tr>

    <?php
    $Resultado = mysqli_query($conex, $DatosGlosario);
    while ($Contenido = mysqli_fetch_assoc($Resultado)) {


    ?>
    <tr>
        <td class = CTabla><?php echo $Contenido['id'] ?></td>
        <td><?php echo $Contenido['palabra'] ?></td>
        <td><?php echo $Contenido['significado'] ?></td>
        <td><img class="payet" src="<?php echo $Contenido['ilustracion'] ?>"></td>
    </tr>

    <?php

    } mysqli_free_result($Resultado)

    ?>

</table>

<?php 
/*       
    $indice=1;
    $Texto = "";
    if($InfoGlosario){
        $Texto .= "<table>";
        $Texto .= "<tr>
                    <th class = CTabla>Numero</th>
                    <th>Palabra</th>
                    <th>Significado</th>
                    <th>Ilustracion</th>
                    </tr>";
        foreach ($InfoGlosario as $Datos){
                
        $Texto .= "<tr>
                    <td class = CTabla>" . $indice++ . "</td>
                    <td>" . $Datos['Palabra'] . "</td>
                    <td>" . $Datos['Significado'] . "</td>
                    <td>" . $Datos['Ilustracion'] . "</td>";
        }
        $Texto .= "</table>";
        echo $Texto;        
    }
*/
?>
    <br><br>
    
    <footer class="footer">
		<div class="contenedor contenedor-footer">
			<div class="footer-text">
				<p>&copy; A D S O - 2022 | Todos los derechos reservados.</p>
			</div>
		</div>
	</footer>

</body>

</html>