<!DOCTYPE html>
<html lang="es-co"> <!--Idioma-->

<head> <!--Encabezado-->

    <title> Market Mallorka </title>

    <meta charset="UTF-8"> <!--Codificación-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Home.css"> <!--CSS-->

    <link rel="stylesheet" href="./Encabezado/Encabezado.css"> <!--CSS Encabezado-->

    <link rel="stylesheet" href="./PiePagina/PiePagina.css"> <!--CSS Pie de Pagina-->

    <link rel="stylesheet" href="Tipografias/Tipografias.css"> <!--Tipografias-->

    <link rel="icon" href="./Imagenes/lime.png"> <!--Icono-->

</head>


<body> <!--Cuerpo-->


    <!--Encabezado Incluido con PHP-->
    <?php include './Encabezado/Encabezado.php'; ?>

    
    <main> <!--Parrafo de Bienvenida-->

        <p class="ParrafoBienvenida"> 
            Bienvenidos a <strong> Market Mallorca </strong>. En esta nueva página encontrarán todo lo necesario para conocernos y así tener un mayor acercamiento con ustedes, quienes son la prioridad en el día a día de nuestro trabajo. Aquí podrán ver nuestro catálogo de productos, realizar pedidos, conocer quiénes somos y nuestros objetivos como empresa, así como los diferentes medios para contactarnos y llegar a nosotros.
        </p>

    </main>


    <!--Pie de Pagina incluido con PHP-->
    <?php include './PiePagina/PiePagina.php' ?>


    <!--JavaScript-->
    <script src="Funciones/Modal.Js"></script>
    
</body>

</html> <!--Estructura-->