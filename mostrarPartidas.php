<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Partidas guardadas</h1>
    <table>
        <tr>
            <td>Nombre de la partida: </td>
            <td>Cargar juego: </td>
        </tr>
        <?php
            $conexion=mysqli_connect('localhost','root','','adivinador');
            $sql="SELECT  NombrePartida  FROM `guardarpartida`";
            $result = mysqli_query($conexion, $sql);
            while($mostrar=mysqli_fetch_array($result))
            { 
        ?>
        <tr>
            <td><?php echo $mostrar['NombrePartida']?></td>
        </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>