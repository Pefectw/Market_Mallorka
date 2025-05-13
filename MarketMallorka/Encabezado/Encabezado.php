<!DOCTYPE html> 


<head> <!--Encabezado-->

    <meta charset="UTF-8"> <!--Codificación-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Encabezado.css"> <!--Css-->

    <link rel="stylesheet" href="Tipografias/Tipografias.css"> <!--Tipografias-->

</head>
    

<body> <!--Cuerpo-->
    
    <!--Ventana Modal-->
    <dialog class="Modal" id="Modal"> 

        <form class="FormularioModal">

            <h2 class="TituloModal"> Login </h2>

            <div class="SeparadoresModal"></div>

            <label class="EnunciadoModal"> Ingrese la contraseña: 
                <input type="text" class="EntradaModal">
            </label>

            <input type="submit" class="BotonModal">

        </form>

    </dialog>


    <!--Encabezado Pagina-->
    <nav class="EncabezadoPagina"> 

        <img src="../Imagenes/lime.png" alt="Logo del Market Mallorca" class="IconoLimon">
    
        <h1> MARKET <br> MALLORCA </h1>

        <!--Barra de Navegación-->
        <div class="BarraNavegacion"> 
        
            <li class="Lista__Items AdministrativoItem" id="EnlaceAdmin" > <span class="IconoAdmin"></span> <samp class="Texto"> Administrativos </samp> </li>
            
            <a href="../Catalogo/Catalogo.php" class="Enlaces__Items">
                <li class="Lista__Items"> <span class="IconoCatalogo"></span> <samp class="Texto"> Catálogo </samp> </li>  
            </a>

            <a href="../Descripcion/Descripcion.php" class="Enlaces__Items">
                <li class="Lista__Items"> <span class="IconoDescripcion"></span> <samp class="Texto"> Quiénes Somos </samp> </li>
            </a>

            <a href="../Contactos/Contactos.php" class="Enlaces__Items">
                <li class="Lista__Items"> <span class="IconoContactos"> </span> <samp class="Texto"> Contáctanos </samp> </li>
            </a>

        </div>

    </nav>

</body>

</html>