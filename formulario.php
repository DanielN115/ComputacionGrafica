<?php

$host='localhost';
$bd='Pag_ventas';
$user='postgres';
$pass='juanchoydani';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$query=("INSERT INTO clientes(idcliente,sname,genero,fechnacimiento,direccion,barrio,telefono,correo,contraseña) 
VALUES('$_REQUEST[identificacion]','$_REQUEST[nombre]','$_REQUEST[genero]','$_REQUEST[fechanac]',
'$_REQUEST[direccion]','$_REQUEST[barrio]','$_REQUEST[telefono]','$_REQUEST[vercorreo]',
'$_REQUEST[vercontraseña]')");

$consulta=pg_query($conexion,$query);
pg_close();

    echo "<br>";
    echo "cliente resgistrado";



?>