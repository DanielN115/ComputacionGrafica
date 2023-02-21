<?php require 'conexion_postgres.php'; ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="estilos/style_productos.css">
		<link rel="stylesheet" href="estilos/style_banner.css">
		<link rel="stylesheet" href="estilos/style_inicio.css">

		<script src="javascript/total_productos.js"></script>
		<title>Papaeleria</title>
	</head>
	<body>
		
		<div class="banner"> <!-- banner principal --> 
            
			<div class="cont_logo"><!-- contenedor del logo -->
				<img class="logo" src="imagenes/Variedades Sebastian.png">
			</div> <!-- contenedor del logo -->
	
			<div class="cont_central"> <!-- contenedor del cuadro de busqueda -->
				<input class="busqueda" type="text" name="busqueda" id="busqueda" placeholder="  Busqueda de Produtos"> <!-- cuadro de busqueda
	 -->
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

             <tbody> 
             <?php
                while($obj=pg_fetch_object($consulta)){?>
             <tr>
                <td> <?php echo $obj->sname;?> </td>
                <td> <?php echo $obj->apellido; ?> </td>    
            </tr>
                 <?php } ?>            
            </tbody>

                </div>

				<div class="cont_carrito"> <!-- contenedor del logo del carrito -->
					<img class="carrito_icono" src="iconos/shopping-cart.png">
					<button class="carrito" onclick="location.href='pag_pago.php'">Carrito</button>
				</div>
			</div>
		</div>
		
		<div class="Cuerpo">
			<h1>Papeleria</h1>
			
			<div class="container">

				<div class="card">
					<img src="imagenes/papeleria/cuaderno_argollado_1.jpg" alt="Producto 1">
					<h2>Cuaderno Argollado Niña</h2>
					<p>Cuaderno argollado tematica de niña con hojas a cuadros.</p>
					<p data-precio="10000" data-cantidad="1" id="precio1" value="10000">$ 10000</p>
					<div class="quantity">
						<label for="quantity1">Cantidad:</label>
						<input type="number" id="quantity1" name="quantity1" min="1" max="20" value="1">
					</div>
					<button onclick="multiplicar1()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado1"></span></p>
				</div>

				<div class="card">
					<img src="imagenes/papeleria/cuaderno_argollado_2.jpg" alt="Producto 2">
					<h2>Cuaderno Argollado Niño</h2>
					<p>Cuaderno argollado tematica de niño con hojas a cuadros.</p>
					<p data-precio="10000" data-cantidad="1" id="precio2" value="10000">$ 10000</p>
					<div class="quantity">
						<label for="quantity2">Cantidad:</label>
						<input type="number" id="quantity2" name="quantity2" min="1" max="20" value="1">
					</div>
					<button onclick="multiplicar2()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado2"></span></p>
				</div>

				<div class="card">
					<img src="imagenes/papeleria/marcadores.jpeg" alt="Producto 3">
					<h2>Maracadores</h2>
					<p>Paquete de marcadores de diferentes colores por 24.</p>
					<p data-precio="20000" data-cantidad="1" id="precio3" value="20000">$ 20000</p>
					<div class="quantity">
						<label for="quantity3">Cantidad:</label>
						<input type="number" id="quantity3" name="quantity3" min="1" max="20" value="1">
					</div>
					<button onclick="multiplicar3()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado3"></span></p>
				</div>

				<div class="card">
					<img src="imagenes/papeleria/carta.jpg" alt="Producto 4">
					<h2>Resma Papel Carta</h2>
					<p>Resma de papel carta para impresoras.</p>
					<p data-precio="40000" data-cantidad="1" id="precio4" value="40000">$ 40000</p>
					<div class="quantity">
						<label for="quantity2">Cantidad:</label>
						<input type="number" id="quantity4" name="quantity4" min="1" max="20" value="1">
					</div>
					<button onclick="multiplicar4()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado4"></span></p>
				</div>

				<div class="card">
					<img src="imagenes/papeleria/oficio.jpg" alt="Producto 5">
					<h2>Resma Papel Oficio</h2>
					<p>Resma de papel oficio para impresoras.</p>
					<p data-precio="50000" data-cantidad="1" id="precio5" value="50000">$ 50000</p>
					<div class="quantity">
						<label for="quantity5">Cantidad:</label>
						<input type="number" id="quantity5" name="quantity5" min="1" max="20" value="1">
					</div>
					<button onclick="multiplicar5()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado5"></span></p>
				</div>
			</div>
		</div>
	</body>
</html>