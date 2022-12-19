<?php
include("con_db.php");

$Nombre = $_POST['Nombre'];
$GeneroPersona = $_POST['GeneroPersona'];
$NumeroTelefonico = $_POST['NumeroTelefonico'];
$TipoPersona = $_POST['TipoPersona'];
$CorreoElectronico = $_POST['CorreoElectronico'];
$Mensaje = $_POST['Mensaje'];
$Fechareg = date("d/m/y");

$Insertar = "INSERT INTO contacto 
            (Nombre, GeneroPersona, NumeroTelefonico, TipoPersona, CorreoElectronico, Mensaje , Fecha_reg)
            VALUES ('$Nombre','$GeneroPersona','$NumeroTelefonico','$TipoPersona','$CorreoElectronico','$Mensaje','$Fechareg')";
$resultado = mysqli_query($conex, $Insertar);

if($resultado){
    ?>
        <script>
            alert('Felicitaciones');
            window.location='/PaginaWebJonatanGutierrezSQL/index.php';
        </script>
    <?php
}
else{
    ?>
        <script>
            alert('Error');
            window.history.go(-1);
        </script>
    <?php
}
?>