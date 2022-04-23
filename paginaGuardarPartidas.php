<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina guardar partidas</title>
</head>
<body>    
<h1>Nueva partida</h1>
<form method="POST" action="paginaGuardarPartidas.php">
    <input name="nombrePartida" class="form-control" placeholder="Nombre de la partida"> 
    <p></p>
    <button type="submit" id="CrearPartida" name="enviarNombrePartida">Guardar nombre</button>   
</form>
<p></p>
<form action="pagina.php">
    <button id="SiPais">Empezar</button>
</form>
<p></p>
<form action="index.php">
    <button id="SiPais">Regresar</button>
</form>
</body>
</html>

<?php
$conexion=mysqli_connect('localhost','root','','adivinador');
if (isset($_POST['enviarNombrePartida'])) {
    Echo "Se ha pulsado el botón";
    $nombrePartida = $_POST['nombrePartida'];
    $insertar = "INSERT INTO guardarpartida(NombrePartida) VALUES ('$nombrePartida');";
    $query = mysqli_query($conexion, $insertar);
    if($query)
    {
        echo "<script> alert('Enviado');</script>";
    }
    else
    {
        echo "<script> alert('Fallo');</script>";
    }
} 
else 
{
    Echo "no se ha pulsado";
}
?>