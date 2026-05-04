<?php
include("conexion.php");

// Buscar lote activo
$sql = "SELECT id_lote FROM lotes WHERE estado='activo' LIMIT 1";
$res = mysqli_query($conexion, $sql);

if (mysqli_num_rows($res) === 0) {
    die("No hay lote activo para cerrar");
}

$fila = mysqli_fetch_assoc($res);
$id_lote = $fila['id_lote'];

// Cerrar lote
$fecha_fin = date('Y-m-d');

$sql = "UPDATE lotes
        SET fecha_fin='$fecha_fin', estado='cerrado'
        WHERE id_lote=$id_lote";

mysqli_query($conexion, $sql);

// Volver al inicio
header("Location: inicio.php");
exit;

