<?php require 'conexion_postgres.php'; ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="estilos/style_banner.css"> 
		<link rel="stylesheet" href="estilos/style_carrusel.css">
		<link rel="stylesheet" href="estilos/style_inicio.css">
		<link rel="stylesheet" href="estilos/style_pago.css">
		<title>Realice su Pago</title>
	</head>
	<body>

		<div class="banner"> <!-- banner principal --> 
            
			<div class="cont_logo"><!-- contenedor del logo -->
				<img class="logo" src="imagenes/Variedades Sebastian.png">
			</div> <!-- contenedor del logo -->
		
			<div class="cont_central"> <!-- contenedor del cuadro de busqueda -->
				<input class="busqueda" type="text" name="busqueda" id="busqueda" placeholder="  Busqueda de Produtos"> <!-- cuadro de busqueda --> 
		
				<div class="paginas"> <!-- contenedor de los botones de las paginas -->
		
					<button class="btn_paginas" name="inicio" onclick="location.href='ingreso.php'">Inicio</button>
					<button class="btn_paginas" name="papeleria" onclick="location.href='papeleria.php'">Papeleria</button>
					<button class="btn_paginas" name="pinateria" onclick="location.href='pinateria.php'">Piñateria</button>
					<button class="btn_paginas">Servicios</button>
					<button class="btn_paginas">Contactenos</button>
				</div>
			</div>
		
			
			<div class="cont_cuenta"> <!-- contenedor de los iconos de usuario y carrito -->
        
        <div class="cont_usuario"> <!-- contenedor del logo de usuario -->
        <img class="user" src="iconos/user.png">
        <nav>
            <ul>
                <li><a href="#">         
                    <?php while($obj=pg_fetch_object($consulta)){?>
                                        <?php echo $obj->sname;?> 
                                            <?php } ?>     
                        </a>
                            <ul>
                                <li><a href="cerrar_sesion.php">Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="cont_carrito"> <!-- contenedor del logo del carrito -->
                <img class="carrito_icono" src="iconos/shopping-cart.png">
                <button class="carrito" onclick="location.href='pag_pago.php'">Carrito</button>
            </div>
        </div>
    
    
    </div> <!-- fin del banner -->

		<div class="cuerpo">

			<form  action="pago.php" method="post" >

				<div class="cont_formulario">

					<h1>Formulario de Pago</h1>

					<label for="pago-total">Pago Total:</label>
					<input type="number" id="pago-total" name="pagototal" required>

					<br>

					<label for="metodo-pago">Método de Pago:</label>

					<select id="metodo-pago" name="metodopago" required>

						<option value="">Selecciona una opción</option>
						<option value="tarjeta">Tarjeta de Crédito</option>
						<option value="transferencia">Tarjeta de Débito</option>
					</select>
					
					<p>Número de Tarjeta</p>
					<input type="text" id="tarjeta" name="tarjeta" required placeholder="">

					<p>Fecha de Vencimiento</p>
					<div class="fecha_ven">

						<input type="text" id="mes" name="anio" required placeholder="Mes">
						<input type="text" id="anio" name="anio" required placeholder="Año">
					</div>

					<p>Ingrese codigo cvc</p>
					<input type="text" id="cvc" name="cvc" required placeholder="">
					<br>
		
					<div class="botones">
						<button class="boton" type="submit" name="submit" value="pagar">Pagar</button>
						<button class="boton" type="reset" name="reset" value="borrar">Borrar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
