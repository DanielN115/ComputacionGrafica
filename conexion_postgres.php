<?php

$host='localhost';
$bd='Pag_ventas';
$user='postgres';
$pass='juanchoydani';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");
$query="SELECT sname,apellido FROM clientes";
$consulta=pg_query($conexion,$query);

?>