<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOJA DE VIDA</title>
    <link rel="stylesheet" href="Css/Index.css">
    <script src="https://kit.fontawesome.com/629d054346.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/contacto.png">
</head>
    <?php   
        require_once("Datos/DatosIndex.php");
        Datos_a_Preparar($InfoIndex);
    ?>
<body>
    
<?php
    include("Header/Header.php");
?>

<div class= "Cuerpo">
                    
    <main class= contenido >
        <center><h1 class="Titulo"><?php echo $InfoIndex[0]['Titulo']; ?></h1></center>
        <br>
        <p class="Texto"><?php echo $InfoIndex[0]['TextoTitulo']; ?></p>
        <br>
        <ul>
        <li><p class="Texto"><?php echo $InfoIndex[0]['TablaTextoTitulo1']; ?></p></li>
        <li><p class="Texto"><?php echo $InfoIndex[0]['TablaTextoTitulo2']; ?></p></li>
        <li><p class="Texto"><?php echo $InfoIndex[0]['TablaTextoTitulo3']; ?></p></li>
        </ul>
        <br><hr><br>
        <center><h1 class="SubTitulo"><?php echo $InfoIndex[0]['SubTitulo']; ?></h1></center>
        <br>
        <p class="Texto"><?php echo $InfoIndex[0]['TextoSubTitulo']; ?></p>
        <br>
        <center><?php echo $InfoIndex[0]['ImagenSubTitulo']; ?></center>
    </main>
    
    <aside class= sidebar >
        <ul class="RedesSociales">
            <li><h1 class="TituloRedesSociales">Redes Sociales</h1></li><br><br>
            <li><a href="https://www.instagram.com" target="_blank" class="instagram"><i class="fa-brands fa-instagram"></i></a></li><br>
            <li><a href="https://web.whatsapp.com" target="_blank" class="whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li><br>
            <li><a href="https://m.facebook.com/login/?locale=es_ES" target="_blank" class="facebook"><i class="fa-brands fa-facebook"></i></a></li><br><br>
            <li><p class="FraseRedesSociales">" Los mejores desarrolladores de software son los que verdaderamente disfrutan lo que hacen "</p></li>
        </ul>
    </aside>
    <div class= widget-1 >
        <p><?php echo $InfoIndex[0]['Widget-1']; ?></p>
    </div>
    <div class= widget-2 >
        <p><?php echo $InfoIndex[0]['Widget-2']; ?></p>
    </div>
        
</div>  

<?php
    include("Footer/Footer.php");
?>
    
</body>

</html>