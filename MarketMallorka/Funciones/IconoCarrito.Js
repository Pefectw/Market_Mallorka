// Escuchador Eventos
document.addEventListener('DOMContentLoaded', () => {
   
    const AnimacionCarrito = document.getElementById('IconoCarritoCompras'); 

    if (AnimacionCarrito){

        const CarritoCompras = lottie.loadAnimation({ 
            container: AnimacionCarrito,
            renderer: 'svg',
            loop: 1,
            autoplay: false,
            path: '../Imagenes/CarritoCompras.json' 
        });

        
        // Escuchador Eventos
        AnimacionCarrito.addEventListener('click', () =>{

            CarritoCompras.play();
        });
    }

});
