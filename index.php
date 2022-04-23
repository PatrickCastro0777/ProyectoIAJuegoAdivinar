
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css"/>
    <title>Pagina de inicio</title>
</head>
<body>
    <div id="contenedor">
        <header>
            <h1>Adivino el jugador que estas pensando</h1>
        </header>
        <button id="Crear">Crear nueva partida</button>
        <p></p>
        <form action="mostrarPartidas.php">
            <button id="Cargar" onclick="hizoClick()">Cargar partida</button>
            <script>
                    function hizoClick() 
                    {
                    alert("Enviado");
                    }
            </script>
        </form>
        <p></p>
    </div> 

    <div class="modal_contenedor" id="modal_contenedor">
        <div class="modal" id="modal">
            <h3> Nueva partida </h3>
            <form method="POST" action="paginaAnio.php">
                <input name="nombrePartida" class="form-control" placeholder="Nombre de la partida"> 
                <p></p>
                    <button type="submit" id="CrearPartida" name="enviarNombrePartida">Crear Partida</button>   
            </form>
        </div>
    </div>     
<script src="mostrarModal.js"></script>
</body>
</html>