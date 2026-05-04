<!DOCTYPE html> 
<html lang="es"> 
<head> <meta charset="UTF-8"> 
<title>CorralApp</title> 
<link rel="stylesheet" href="css/pagina_principal.css"> 
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
    <div id="cuerpo"> 
        <section class="datos"> 
            <img src="image/Cerdos.jpg" alt="Imagen de Cerdo" class="cerdo"> 
            <form method="POST"> 
                <?php include ("mostrar.php"); ?> 
            </form> 
        </section> 
    </div> 
</body>