<?php
function conectar(){
    $conexion =mysqli_connect('localhost','root','','adivinador');
    return $conexion;
}
$conexion =mysqli_connect('localhost','root','','adivinador');
?>