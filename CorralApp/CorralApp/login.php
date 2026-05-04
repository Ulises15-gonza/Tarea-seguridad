<?php
session_start();
include ("conexion.php");

if(!empty($_POST["Usuario"]) and !empty($_POST["Clave"])){
    $usuario=$_POST["Usuario"];
    $clave=$_POST["Clave"];
    $sql=$conexion->query("select * from inicio_sesion where usuario= '$usuario' and contraseña= '$clave' ");
    if ($datos=$sql->fetch_object()) {
        $_SESSION["id"]=$datos->id;
        $_SESSION["nombre"]=$datos->nombre;
        $_SESSION["apellido"]=$datos->apellido;
        header("location:inicio.php");
    } else {
        header("Location: index.php");
    }
    
}
else{
    echo 'campo vacio';
}



?>