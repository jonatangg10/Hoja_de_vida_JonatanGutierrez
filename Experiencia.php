<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOJA DE VIDA</title>
    <link rel="stylesheet" href="Css/Experiencia.css">
    <script src="https://kit.fontawesome.com/629d054346.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/contacto.png">
</head>
    <?php   
        require_once("Datos/DatosExperiencia.php");
        Datos_a_Preparar($InfoExperiencia);
    ?>
<body>

<?php
    include("Header/Header.php");
?>

<div class= "Cuerpo">
                    
    <main class= contenido >
        <center><h1 class="Titulo"><?php echo $InfoExperiencia[0]['Titulo']; ?></h1></center>
        <br>
        <p class="Texto"><?php echo $InfoExperiencia[0]['TextoTitulo']; ?></p>
        <br>
        <ul>
        <li><p class="Texto"><?php echo $InfoExperiencia[0]['ListaTextoTitulo1']; ?></p></li><br>
        <li><p class="Texto"><?php echo $InfoExperiencia[0]['ListaTextoTitulo2']; ?></p></li><br>
        <li><p class="Texto"><?php echo $InfoExperiencia[0]['ListaTextoTitulo3']; ?></p></li><br>
        <li><p class="Texto"><?php echo $InfoExperiencia[0]['ListaTextoTitulo4']; ?></p></li><br>
        <li><p class="Texto"><?php echo $InfoExperiencia[0]['ListaTextoTitulo5']; ?></p></li>
        </ul>
        <br>
        <center><?php echo $InfoExperiencia[0]['ImagenSena']; ?></center>
    </main>
    
    <aside class= sidebar >
        <ul class="ListaMaterias">
            <li><h1 class="TituloMaterias"><?php echo $InfoExperiencia[0]['SubTitulo']; ?></h1></li><br><br>
            <li><hr style="width: 100%;"></li><br><br>
            <li><a href="Materias/Electricidad.php" class="TextoLista">Electricidad</a></li><br>
            <li><a href="Materias/Emprendimiento.php" class="TextoLista">Emprendimiento</a></li><br>
            <li><a href="Materias/Etica.php" class="TextoLista">Etica</a></li><br>
            <li><a href="Materias/Matematicas.php" class="TextoLista">Matematicas</a></li><br>
            <li><a href="Materias/Tecnologo.php" class="TextoLista">Tecnologo</a></li><br>
            <li><a href="Glosario/Glosario.php" class="TextoLista">Glosario</a></li><br>
        </ul>
    </aside>
    <div class= widget-1 >
        <p><?php echo $InfoExperiencia[0]['Widget-1']; ?></p>
    </div>
    <div class= widget-2 >
        <p><?php echo $InfoExperiencia[0]['Widget-2']; ?></p>
    </div>
        
</div>    

<?php
    include("Footer/Footer.php");
?>

</body>

</html>