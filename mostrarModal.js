const Crear = document.getElementById('Crear');
const CrearModal = document.getElementById('CrearPartida');
const modal_contenedor = document.getElementById('modal_contenedor');



Crear.addEventListener("click",()=>{
    modal_contenedor.classList.add('show');
})

CrearModal.addEventListener("click",()=>{
    modal_contenedor.classList.remove('show');
})
