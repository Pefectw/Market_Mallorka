
// Escuchador Eventos
document.addEventListener('DOMContentLoaded', function(){

  const BotonFlecha = document.getElementById('BotonFlecha');


  // Escuchador Eventos
  window.addEventListener('scroll', function(){

    // Cuenta los números de pixeles
    if (window.scrollY > 580){ 

      BotonFlecha.classList.add('MostrarBoton');

    } else {
      BotonFlecha.classList.remove('MostrarBoton');

    }
  });


  // Escuchador Eventos
  BotonFlecha.addEventListener('click', function(){

    // Se desplaza a una posición
    window.scrollTo({
      top: 0,
      behavior: 'smooth' // Realiza un desplazamiento suave

    });
  });
});