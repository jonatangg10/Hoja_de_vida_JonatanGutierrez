<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOJA DE VIDA</title>
    <link rel="stylesheet" href="Css/Estudios.css">
    <link rel="icon" href="img/contacto.png">
</head>
    <?php   
        require_once("Datos/DatosEstudios.php");
        Datos_a_Preparar($InfoEstudios);
    ?>
<body>

<?php
    include("Header/Header.php");
    include("Include/conect.php");
    include("Include/herramientas.php");
?>

<div class= "Cuerpo">
    <main class= contenido >
<?php

    $LinkBD=Conectarse("localhost" , "root" , "" , "web_personal_jonatan"); 
    $ScriptSQL = "SELECT * FROM estudios";

if ($DatosEstudio = mysqli_query($LinkBD, $ScriptSQL)) {

    // -- Iniciamos la publicación de los datos, mostrando la cabecera de la tabla.
    //    en este caso, un solo renglón con el título  "Estudios Realizados"
?>
    <center><h1 class="Titulo"><?php echo $InfoEstudios[0]['Titulo']; ?></h1></center><br>
<?php
     
	// -- inicio ciclo repetitivo que recorre la matriz de $DatosEstudio procesando línea por línea
	//    los datos serán distribuidos en las diferentes celdas de la tabla (plantilla prediseñada)
	while($fila = mysqli_fetch_array($DatosEstudio)){
		write_to_console($fila);

		echo "<p class='Texto'><b>" . $fila['tipo_estudio'] . "</b></p>";
        echo "<p class='Texto'>" . $fila['nombre_estudio'] ."</p>";
		echo "<p class='Texto'>" . $fila['institucion_educ'] ."</p>";	
		echo "<p class='Texto'>" . $fila['ciudad'] . "</p>";
		echo "<p class='Texto'>" . $fila['fecha_graduacion'] . "</p>". "<br><hr><br>";	
		}// --- aquí finaliza el ciclo while
    // -- liberar el conjunto de resultados 
    mysqli_free_result($DatosEstudio);

  }
  else {
    printf("Hubo errores al leer los datos");
  }
  		//Cerrar la conexión con el servidor de bases de datos:
      mysqli_close($LinkBD);
?>
    </main>
    
    <aside class= sidebar >
        <table>
            <tr>
                <td><center><?php echo $InfoEstudios[0]['Foto']; ?></center></td>
            </tr>
            <tr>
                <td><p class="Frase"><?php echo $InfoEstudios[0]['Frase']; ?></p></td>
            </tr>
        </table>
        
    </aside>
        <div class= widget-1 >
            <p><?php echo $InfoEstudios[0]['Widget-1']; ?></p>
        </div>
        <div class= widget-2 >
            <p><?php echo $InfoEstudios[0]['Widget-2']; ?></p>
        </div>
        
    </div>    

<?php
    include("Footer/Footer.php");
?>

</body>

</html>