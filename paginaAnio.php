<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Años</title>
</head>
<body>
    <form action="paginaAnio.php" method="POST">
    <h1>Año del mundial</h1>
    <table>
        <tr>
            <td>Fue al mundial de: </td>
        </tr>
        <?php
            $conta = 0;
            if($_POST)
            {
                $conta=$_POST['conta'];
              
                if($conta>21)
                {
                    $conta = 1;
                }
                echo "Contador: " .$conta;
            }
            else
            {
                $conta = 1;
            }
            $conexion=mysqli_connect('localhost','root','','adivinador');
            $sql="SELECT Anio FROM `anio` WHERE (IdAnio = $conta)";
            $result = mysqli_query($conexion, $sql);
            while($mostrar=mysqli_fetch_array($result))
            { 
        ?>
        <tr>
            <td><?php echo $mostrar['Anio']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
   <form>
        <input type="hidden"  name="conta" value="<?php echo $conta+1?>">
        <input type="submit" name="NoPais" value="No">   
   </form>
   <p></p>
   <form action="paginaPais.php">
        <button id="SiPais">Si</button>
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