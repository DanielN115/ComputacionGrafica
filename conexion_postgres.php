<?php

session_start();

$host='localhost';
$bd='Pag_ventas';
$user='postgres';
$pass='juanchoydani';
$nombre=$_SESSION['nombre_usuario'];

$conexion=pg_connect("host=$host dbname=$bd user=$user password= $pass");
$query="SELECT sname,apellido FROM clientes WHERE correo= '$nombre'";
$consulta=pg_query($conexion,$query);

?>