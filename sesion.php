<?php

require 'conexion_postgres.php';

session_start();

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$query="SELECT * FROM clientes WHERE correo = '$usuario' AND contraseña = '$contraseña'";
$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);
if($cantidad>0){
    $_SESSION['nombre_usuario']=$usuario;
    header("location: ingreso.php");   
    echo '<script language="javascript">alert("inicio de sesion exitoso");</script>';
}else{
    echo '<script language="javascript">alert("datos incorrectos");</script>';;
}

?>

