const imagenes = document.querySelectorAll('.img-galeria')
const imagenesLight = document.querySelector('.agregar-imagen')
const contenedorLight = document.querySelector('.imagen-light')
const hamburguer1 = document.querySelector('.hamburger');

imagenes.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
        aparecerImagen(imagen.getAttribute('src'))
    })
})

contenedorLight.addEventListener('click', (e)=>{
    if(e.target !== imagenesLight) {
        contenedorLight.classList.toggle('show')
        imagenesLight.classList.toggle('showImage') 
        hamburguer1.style.opacity = '1'
    }
})


const aparecerImagen = (imagen)=>{
    imagenesLight.src = imagen
    contenedorLight.classList.toggle('show')
    imagenesLight.classList.toggle('showImage') 
    hamburguer1.style.opacity = '0'
}

window.addEventListener('load', function(){
  new Glider(document.querySelector('.carousel__lista'), {
      slidesToShow: 1,
      slidesToScroll: 1, 
      dots: '.carousel__indicadores',
      arrows: {
        prev: '.carousel__anterior',
        next: '.carousel__siguiente'
      }, 
      responsive: [
          {
            // screens greater than >= 775px
            breakpoint: 600,
            settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: 2,
              slidesToScroll: 2,  
            }
          },{
            // screens greater than >= 1024px
            breakpoint: 800,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
          }
        ]
  });
});