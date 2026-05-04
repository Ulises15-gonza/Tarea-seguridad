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
      <form action="agregar_alimento.php" method="POST">
        <h1>Añadir Alimentos</h1>
        <hr>
        <label>Agregar Fecha</label>
        <input type="date" name="fecha" placeholder="INGRESAR FECHA" required><br>
        <label>Añadir Cantidad de Alimento</label>
        <input type="number" name="libras" placeholder="INGRESAR LA CANTIDAD DE alimento" required><br>
        <button type="submit" name="accion" value="agregar">Guardar</button>
      
    </div>

</body>