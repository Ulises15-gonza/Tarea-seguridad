<?php
include("conexion.php");

$sql = "
    SELECT 
        l.id_lote,
        l.parcela,
        l.estado,
        l.fecha_inicio,
        l.fecha_fin,
        l.cantidad_cerdos,
        IFNULL(SUM(a.libras),0) AS total_comida
    FROM lotes l
    LEFT JOIN alimentacion a ON l.id_lote = a.id_lote
    GROUP BY l.id_lote
";

$resultado = mysqli_query($conexion, $sql);

/* contenedor de resultados */
echo "<div class='resultados'>";

if (mysqli_num_rows($resultado) > 0) {

    while ($fila = mysqli_fetch_assoc($resultado)) {

        echo "<div class='tarjeta-lote'>";

        echo "<p><strong>Lote:</strong> " . ($fila['id_lote'] ?? '') . "</p>";
        echo "<p><strong>Parcela:</strong> " . ($fila['parcela'] ?? '') . "</p>";
        echo "<p><strong>Estado:</strong> " . ($fila['estado'] ?? '') . "</p>";
        echo "<p><strong>Inicio:</strong> " . ($fila['fecha_inicio'] ?? '') . "</p>";

        if (empty($fila['fecha_fin'])) {
            echo "<p><strong>Fin:</strong> ---</p>";
        } else {
            echo "<p><strong>Fin:</strong> {$fila['fecha_fin']}</p>";
        }

        echo "<p><strong>Cerdos:</strong> " . ($fila['cantidad_cerdos'] ?? '') . "</p>";
        echo "<p><strong>Comida:</strong> " . ($fila['total_comida'] ?? 0) . " lb</p>";

        echo "</div>";
    }

} else {

    echo "<div class='tarjeta-lote'>";
    echo "<br>";
    echo "<p>Lote:</p>";
    echo "<br>";
    echo "<p>Parcela:</p>";
    echo "<br>";
    echo "<p>Estado:</p>";
    echo "<br>";
    echo "<p>Inicio:</p>";
    echo "<br>";
    echo "<p>Fin:</p>";
    echo "<br>";
    echo "<p>Cerdos:</p>";
    echo "<br>";
    echo "<p>Comida total: 0 lb</p>";
    echo "</div>";
}

echo "</div>";
?>