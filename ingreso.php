<?php require 'conexion_postgres.php'; 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style_banner.css"> 
    <link rel="stylesheet" href="estilos/style_carrusel.css">
    <link rel="stylesheet" href="estilos/style_inicio.css">
    <title>Inicio</title>

    <script src="https://kit.fontawesome.com/32a63415cd.js" crossorigin="anonymous"></script>
    
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
        
        <div class="contenedor_carrusel">
            
            <div class="item_carrusel" id="item_carrusel_1">
                
                <div class="tarjeta_carrusel" id="imagen1">
                    <img src="imagenes/Carrusel/carrusel1.png" alt="carrusel1">
                </div>
    
                <div class="flechas">
                    <a href="#item_carrusel_3">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                    </a>
                    <a href="#item_carrusel_2">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div> 
    
            <div class="item_carrusel" id="item_carrusel_2">
                
                <div class="tarjeta_carrusel" id="imagen2">
                    <img src="imagenes/Carrusel/carrusel2.png" alt="carrusel2">
                </div>
    
                <div class="flechas">
                    <a href="#item_carrusel_1">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                    </a>
                    <a href="#item_carrusel_3">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>
    
            <div class="item_carrusel" id="item_carrusel_3">
                <div class="tarjeta_carrusel" id="imagen3">
                    <img src="imagenes/Carrusel/carrusel3.png" alt="carrusel3">
                    
                </div>
                <div>
                    <h2 class="texto_carrusel"> Encuentra los globos para todas las ocaciones epeciales</h2>
                </div>
                <div class="flechas">
                    <a href="#item_carrusel_2">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                    </a>
                    <a href="#item_carrusel_1">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


