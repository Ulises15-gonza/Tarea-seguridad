<!DOCTYPE html> 
<html lang="es"> 
<head> <meta charset="UTF-8"> 
<title>CorralApp</title> 
<link rel="stylesheet" href="css/tarjeta.css"> 
</head> 
<body> 
    <header> 
        <img src="image/logoCorralApp.jpg" alt="Logo de CorralApp" class="logo"> 
        <h1>CorralApp</h1> 
        <ul class="menu"> 
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="añadir_lotes.php">Crear Parcela</a></li>
            <li><a href="añadir_alimento.php">Añadir alimento</a></li> 
            <li><a href="cerrar_cria.php"onclick="return confirm('¿Seguro que desea cerrar el lote activo?');">Cerrar Lote</a></li>
            <li><a href="consulta.php">Consulta Datos</a></li>
            <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li> 
        </ul> 
    </header> 

    <div class="Tarjeta">
      <form action="agregar_lote.php" method="POST">
        <h1>Añadir lotes</h1>
        <hr>
        <label>Añadir Nombre de la Parcela</label>
        <input type="text" name="parcela" placeholder="NOMBRE DE LA PARCELA" required><br>
        <label>Añadir fecha de Inicio</label>
        <input type="date" name="fecha_inicio" placeholder="INGRESAR FECHA DE INICIO" required><br>
        <label>Añadir Cantidad de Cerdos</label>
        <input type="number" name="cantidad" placeholder="INGRESAR LA CANTIDAD DE CERDOS" required><br>
        <button type="submit">Crear Parcela</button>
      </form>
    </div>

</body>