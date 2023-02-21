<?php

$host='localhost';
$bd='Pag_ventas';
$user='postgres';
$pass='juanchoydani';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$query=("INSERT INTO ventas(pago_total,metodo_pago,num_targeta)
 VALUES('$_REQUEST[pagototal]','$_REQUEST[metodopago]','$_REQUEST[tarjeta]')");

$consulta=pg_query($conexion,$query);
pg_close();


    echo "<br>";
    echo '<script language="javascript">alert("Pago exitoso");</script>';
    header("location: ingreso.php");   

?>
