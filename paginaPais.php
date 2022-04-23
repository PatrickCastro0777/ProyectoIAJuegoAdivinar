<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Paises</title>
</head>
<body>
    <form action="paginaPais.php" method="POST">
    <h1>Nacionalidad</h1>
    <table>
        <tr>
            <td>Es de: </td>
        </tr>
        <?php
            $conta = 0;
            if($_POST)
            {
                $conta=$_POST['conta'];
              
                if($conta>79)
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
            $sql="SELECT Nombre FROM `paises` WHERE (IdPaises = $conta)";
            $result = mysqli_query($conexion, $sql);
            while($mostrar=mysqli_fetch_array($result))
            { 
        ?>
        <tr>
            <td><?php echo $mostrar['Nombre']?></td>
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
   <form action="paginaPosicion.php">
        <button id="SiPais">Si</button>
   </form>
</body>
</html>