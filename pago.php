<?php

$host='localhost';
$bd='Pag_ventas';
$user='postgres';
$pass='juanchoydani';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$query=("INSERT INTO table() VALUES() ");

$consulta=pg_query($conexion,$query);
pg_close();

    echo "<br>";
    echo "PAGO HECHO";

?>
