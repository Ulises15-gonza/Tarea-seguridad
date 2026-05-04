<?php
include("conexion.php");

if ($_POST) {

    $accion = $_POST['accion'];

    
    $sql_lote = "SELECT id_lote FROM lotes WHERE estado='activo' LIMIT 1";
    $res_lote = mysqli_query($conexion, $sql_lote);

    if (mysqli_num_rows($res_lote) === 0) {
        die("ERROR: No hay ningún lote activo");
    }

    $fila = mysqli_fetch_assoc($res_lote);
    $id_lote = $fila['id_lote'];

    
    if ($accion === "agregar") {

        $fecha  = $_POST['fecha'];
        $libras = $_POST['libras'];

        $sql = "INSERT INTO alimentacion (id_lote, fecha, libras)
                VALUES ($id_lote, '$fecha', $libras)";
        mysqli_query($conexion, $sql);

        header("Location: añadir_alimento.php");
        exit;
    }

}
?>
