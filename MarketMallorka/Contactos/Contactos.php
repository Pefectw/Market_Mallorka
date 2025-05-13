<!DOCTYPE html>
<html lang="es-co"> <!--Idioma-->

<head> <!--Encabezado-->

    <title> Market Mallorka </title>

    <meta charset="UTF-8"> <!--Codificación-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Contactos.css"> <!--CSS-->

    <link rel="stylesheet" href="../Encabezado/Encabezado.css"> <!--CSS Encabezado-->

    <link rel="stylesheet" href="../PiePagina/PiePagina.css"> <!--CSS Pie de Pagina-->

    <link rel="stylesheet" href="../Tipografias/Tipografias.css"> <!--Tipografias-->

    <link rel="icon" href="../Imagenes/Contacto.png"> <!--Icono-->

</head>


<body> <!--Cuerpo-->


    <!--Encabezado Incluido con PHP-->
    <?php include '../Encabezado/Encabezado.php'; ?>


    <!--Encapsulado Grande-->
    <div class="EncapsuladoGrande">

        <!--Google Maps-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.962158103609!2d-75.1741804!3d4.4181529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38c5bbfc179a99%3A0x49e655d010036745!2sMarket%20Mallorca!5e0!3m2!1ses!2sco!4v1746377840999!5m2!1ses!2sco"  loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="Maps">
        </iframe>


        <!--Encapsulado Pequeño-->
        <div class="EncapsuladoPequeño">

            <!--Encapsulado Contactos-->
            <div class="EncapsuladoContactos">

                <h3> Contactos </h3>

                <ul> <!--Lista no Ordenada-->
                    <li> <strong> Correo: </strong> cardonaarizasas@gmail.com </li>
                    <li> <strong> Numero principal: </strong> 3001010014 </li>
                    <li> <strong> Numero de respaldo: </strong> 300411147 </li>
                    <li> <strong> Dirección: </strong> CALLE 98 #4 B - 80 SUR CONJ MALLORCA LOCAL 1 </li>
                </ul>

            </div>


            <!--Encapsulado Metodos-->
            <div class="EncapsuladoMetodos">

                <h3> Metodos de Pago </h3>

                <div class="EncapsuladoImagenesMetodos">

                    <img src="../Imagenes/bancolombia.png" class="ImagenesEncapsuladoMetodos">

                    <img src="../Imagenes/nequi.png" class="ImagenesEncapsuladoMetodos">

                    <img src="../Imagenes/banco_popular.png" class="ImagenesEncapsuladoMetodos">

                    <img src="../Imagenes/banco_occidente.png" class="ImagenesEncapsuladoMetodos">

                </div>
                
            </div>

        </div>

    </div>


    <!--Pie de Pagina incluido con PHP-->
    <?php include '../PiePagina/PiePagina.php' ?>


    <!--JavaScript-->
    <script src="../Funciones/Modal.Js"></script>

</body>

</html> <!--Estructura-->