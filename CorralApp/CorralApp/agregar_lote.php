<?php
include("conexion.php");

if ($_POST) {
    $parcela = $_POST['parcela'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $cantidad = $_POST['cantidad'];

    $sql = "INSERT INTO lotes (parcela, fecha_inicio, cantidad_cerdos)
            VALUES ('$parcela', '$fecha_inicio', $cantidad)";

    mysqli_query($conexion, $sql);
    header("Location: inicio.php");
}
?>