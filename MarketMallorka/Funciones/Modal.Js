// DOM - Modal Login
const Admin = document.getElementById('EnlaceAdmin')


// Eventos
Admin.addEventListener('click', () => {

    Modal.showModal();

});



// Modal Dirección 

const BotonesComprar = document.getElementsByTagName('button');

for (let i = 0; i < BotonesComprar.length; i++){

  const Boton = BotonesComprar[i];

  Boton.addEventListener('click', () =>{

    ModalDatos.showModal();

  });
}



// Modal Confirmación

const BotonDatos = document.getElementById('BotonDatos');

BotonDatos.addEventListener('click', (event) =>{

  event.preventDefault()

  const Texto = document.getElementById('TextoModalConfirmacion');

  const nombreUsuario = document.getElementById('Nombre').value;

  const DireccionUsuario = document.getElementById('Direccion').value

  Texto.textContent = `¡Genial ${nombreUsuario}! Se ha realizado su pedido a ${DireccionUsuario}`;

  ModalDatos.close(); 

  ModalCompra.showModal();
  
});









