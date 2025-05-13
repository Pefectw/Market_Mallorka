<!DOCTYPE html>
<html lang="es-co"> <!--Idioma-->

<head> <!--Encabezado-->
    
    <title> Market Mallorka </title>

    <meta charset="UTF-8"> <!--Codifición-->
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Catalogo.css"> <!--Css-->

    <link rel="stylesheet" href="../Encabezado/Encabezado.css"> <!--Css de Encabezado-->

    <link rel="stylesheet" href="../PiePagina/PiePagina.css">
        
    <link rel="stylesheet" href="../Tipografias/Tipografias.css"> <!--Tipografias-->
        
    <link rel="icon" href="../Imagenes/Catalogo.png"> <!--Icono-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>

</head>

    
<body> <!--Cuerpo-->


    <!--Encabezado Incluido con PHP-->
    <?php include '../Encabezado/Encabezado.php'; ?>


    <!--Ventana Modal Datos-->
    <dialog class="Modal" id="ModalDatos">
        <form class="FormularioModalDatos">

            <h2 class="TituloModalDatos"> Dirección </h2>

            <div class="SeparadoresModalDatos"></div>

            <label class="EnunciadoModalDatos"> Ingrese su nombre:
                <input type="text" class="EntradaModalDatos" id="Nombre" required>
            </label>

            <label class="EnunciadoModalDatos"> Ingrese su (Conjunto - TO - Apt):
                <input type="text" class="EntradaModalDatos" id="Direccion" required>
            </label>

            <input type="submit" class="BotonModalDatos" id="BotonDatos">

        </form>
    </dialog>


    <!--Ventana Modal Confirmación-->
    <dialog class="Modal" id="ModalCompra">
        <form class="FormularioModalConfirmacion">

            <h2 class="TituloModalConfirmacion"> !Gracias por tu compra! </h2>

            <div class="SeparadoresModalConfirmacion"></div>

            <p class="TextoModalConfirmacion" id="TextoModalConfirmacion"> </p>

            <input type="submit" class="BotonModalConfirmacion">

        </form>
    </dialog>


    <!--Encapsulado Grande-->
    <div class="EncapsuladoPadre">

        <div class="EncapsuladoMenu">

            <section class="Menu"> <!--Agrupa Contenido-->
                <a class="Opciones" href="#Carnes"> Carnes </a>
                <a class="Opciones" href="#Verduras"> Verduras </a>
                <a class="Opciones" href="#Lonchera"> Lonchera </a>
                <a class="Opciones" href="#Aseo"> Aseo </a>
            </section>

        </div>


        <div class="EncapsuladoProductos" id="EncapsuladoProductos">

            <h3 id="Carnes" > CARNES </h3>

            <div class="EncapsuladoProducto" id="1">

                <img src="../Imagenes/Milanesa.png" class="Imagen">

                <samp class="Nombre"> Milanesa de Cerdo </samp>

                <samp class="Precio" data-precio=""1000> $10.000 </samp>

                <button class="Boton BotonComprar" data-producto="Milanesa de Cerdo"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Chuleta.png" class="Imagen">

                <samp class="Nombre"> Chuleta de Cerdo </samp>

                <samp class="Precio"> $8.500 </samp>

                <button class="Boton BotonComprar" data-producto="Chuleta de Cerdo"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Lomo.png" class="Imagen">

                <samp class="Nombre"> Hueso de res </samp>

                <samp class="Precio"> $4.500 </samp>

                <button class="Boton BotonComprar" data-producto="Hueso de res"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Sobrebarriga.png" class="Imagen">

                <samp class="Nombre"> Sobrebarriga delgada </samp>

                <samp class="Precio"> $14.000 </samp>

                <button class="Boton BotonComprar" data-producto="Sobrebarriga delgada"> Pedir </button>

            </div>


            <h3 id="Verduras"> VERDURAS </h3>

            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Platano.png" class="Imagen">

                <samp class="Nombre"> Platano Verde 1 und </samp>

                <samp class="Precio"> $1.000 </samp>

                <button class="Boton BotonComprar" data-producto="Platano Verde 1 und"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Piña.png" class="Imagen">

                <samp class="Nombre"> Piña 1 und </samp>

                <samp class="Precio"> $5.500 </samp>

                <button class="Boton BotonComprar" data-producto="Piña 1 und"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Granadilla.png" class="Imagen">

                <samp class="Nombre"> Granadilla 1 und </samp>

                <samp class="Precio"> $1.900 </samp>

                <button class="Boton BotonComprar" data-producto="Granadilla 1 und"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Coco.png" class="Imagen">

                <samp class="Nombre"> Coco 1 und </samp>

                <samp class="Precio"> $10.000 </samp>

                <button class="Boton BotonComprar" data-producto="Coco 1 und"> Pedir </button>

            </div>


            <H3 id="Lonchera"> Lonchera </H3>

            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Detodito.png" class="Imagen">

                <samp class="Nombre"> Detodito BBQ </samp>

                <samp class="Precio"> $19.000 </samp>

                <button class="Boton BotonComprar" id="v" data-producto="Detodito BBQ"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Detoditos.png" class="Imagen">

                <samp class="Nombre"> Detodito Mix </samp>

                <samp class="Precio"> $8.600 </samp>

                <button class="Boton BotonComprar" data-producto="Detodito Mix"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Choclitos.png" class="Imagen">

                <samp class="Nombre"> Choclitos Limón </samp>

                <samp class="Precio"> $7.500 </samp>

                <button class="Boton BotonComprar" data-producto="Choclitos Limón"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Doritos.png" class="Imagen">

                <samp class="Nombre"> Doritos Mega Queso  </samp>

                <samp class="Precio"> $13.500 </samp>

                <button class="Boton BotonComprar" data-producto="Doritos Mega Queso"> Pedir </button>

            </div>


            <h3 id="Aseo"> Aseo </h3>

            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Servilletas.png" class="Imagen">

                <samp class="Nombre"> Servilletas 200 und </samp>

                <samp class="Precio"> $2.100 </samp>

                <button class="Boton BotonComprar" data-producto="Servilletas 200 und"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Lavaloza.png" class="Imagen">

                <samp class="Nombre"> Lavaloza Crema Limón </samp>

                <samp class="Precio"> $2.400 </samp>

                <button class="Boton BotonComprar" data-producto="Lavaloza Crema Limón"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Toalla.png" class="Imagen">

                <samp class="Nombre"> Toalla Cocina 44 und</samp>

                <samp class="Precio"> $3.900 </samp>

                <button class="Boton BotonComprar" data-producto="Toalla Cocina 44 und"> Pedir </button>

            </div>


            <div class="EncapsuladoProducto">

                <img src="../Imagenes/Quitamanchas.png" class="Imagen">

                <samp class="Nombre"> Quitamanchas 850 gr </samp>

                <samp class="Precio"> $53.600 </samp>

                <button class="Boton BotonComprar" data-producto="Quitamanchas 850 gr"> Pedir </button>

            </div>

        </div>
    </div>


    <!--Icono Carrito de Compras-->
    <div id="IconoCarritoCompras"></div>

    <!--Icono de Whatssapp-->
    <a href="https://wa.me/573001010014?text=Hola%20tengo%20una%20pregunta"  target="_blank">
        <img src="../Imagenes/IconoWhatsapp.png" title="Contactate con el Matket" class="IconoWhats">
    </a>


    <!--Icono Flecha-->
    <button class="BotonIconoFlecha" id="BotonFlecha">
        <img src="../Imagenes/FlechaArriba.png" class="IconoFlecha">
    </button>


    <!--Pie de Pagina Incluido con PHP-->
    <?php include '../PiePagina/PiePagina.php' ?>


    <!--JavaScript-->
    <script src="../Funciones/BotonFlecha.Js"></script>

    <script src="../Funciones/IconoCarrito.Js"></script>

</body>

</html> <!--Estructura-->