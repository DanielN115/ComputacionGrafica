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
		
		<title>Piñateria</title>
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
						   <?php while($obj=pg_fetch_object($consulta)){?>
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
			<h1>Productos Piñateria</h1>
			<div class="container">

				<div class="card">
					<img src="imagenes/pinateria/tarjertas.jpeg" alt="Producto 1">
					<h2>Tarjetas</h2>
					<p>Diferentes tipos de tarjetas para diferentes celebraciones.</p>
					<p data-precio="5000" data-cantidad="1" id="precio1" value="5000">$ 5000</p>

					<div class="quantity">
						<label for="quantity1">Cantidad:</label>
						<input type="number" id="quantity1" name="quantity1" min="1" max="20" value="1">
					</div>

					<button onclick="multiplicar1()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado1"></span></p>
				</div>

				<div class="card">
					<img src="imagenes/pinateria/velas.jpg" alt="Producto 2">
					<h2>Velas de Cumpleaños</h2>
					<p>Velas para pastel de cumpleaños.</p>
					<p data-precio="2000" data-cantidad="1" id="precio2" value="2000">$ 2000</p>
					<div class="quantity">
						<label for="quantity2">Cantidad:</label>
						<input type="number" id="quantity2" name="quantity2" min="1" max="20" value="1">
					</div>
					<button onclick="multiplicar2()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado2"></span></p>
				</div>

				<div class="card">
					<img src="imagenes/pinateria/globos.jpeg" alt="Producto 3">
					<h2>Globlos</h2>
					<p>Globos de diferentes estilos para diferentes tematicas de fiestas.</p>
					<p data-precio="20000" data-cantidad="1" id="precio3" value="20000">$ 20000</p>
					<div class="quantity">
						<label for="quantity3">Cantidad:</label>
						<input type="number" id="quantity3" name="quantity3" min="1" max="20" value="1">
					</div>
					<button onclick="multiplicar3()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado3"></span></p>
				</div>

				<div class="card">
					<img src="imagenes/pinateria/letreros.jpeg" alt="Producto 4">
					<h2>Letreros</h2>
					<p>Letreros de diferentes estilos para diferentes tematicas de fiestas.</p>
					<p data-precio="10000" data-cantidad="1" id="precio4" value="10000">$ 10000</p>
					<div class="quantity">
						<label for="quantity2">Cantidad:</label>
						<input type="number" id="quantity4" name="quantity4" min="1" max="20" value="1">
					</div>
					<button onclick="multiplicar4()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado4"></span></p>
				</div>

				<div class="card">
					<img src="imagenes/pinateria/paquetes.jpeg" alt="Producto 5">
					<h2>Paquetes de Globos</h2>
					<p>Paquetes de globos de diferentes colores.</p>
					<p data-precio="5000" data-cantidad="1" id="precio5" value="5000">$ 5000</p>
					<div class="quantity">
						<label for="quantity5">Cantidad:</label>
						<input type="number" id="quantity5" name="quantity5" min="1" max="20" value="1">
					</div>
					<button onclick="multiplicar5()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado5"></span></p>
				</div>

				<div class="card">
					<img src="imagenes/pinateria/cortinas.jpeg" alt="Producto 6">
					<h2>Cortinas</h2>
					<p>Cortinas de diferentes colores para paredes.</p>
					<p data-precio="10000" data-cantidad="1" id="precio6" value="10000">$ 10000</p>
					<div class="quantity">
						<label for="quantity6">Cantidad:</label>
						<input type="number" id="quantity6" name="quantity6" min="1" max="20" value="1">
					</div>
					<button onclick="multiplicar6()">Agregar al carrito</button>
					<p>El resultado es: $ <span id="resultado6"></span></p>
				</div>

				<div class="card">
					<button onclick="dar_total()">Comprar</button>
					<p>El total de la compra es: $ <span id="total_compra"></span></p>
				</div>
			</div>
		</div>
	</body>
</html>