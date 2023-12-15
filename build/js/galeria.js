document.addEventListener('DOMContentLoaded', function(){
    iniciarApp();
});


function iniciarApp(){
    crearGaleria();
}

function crearGaleria(){
    const galeria = document.querySelector(".galeria-imagenes");

    for(let i = 1; i <= 12; i++){

        const imagen = document.createElement('picture');
        imagen.innerHTML = `
            <img loading="lazy" src="build/img/thumb/${i}.webp" alt="imagen de galeria">
        `;

        imagen.onclick = function() {
            mostrarImagen(i);
        }

        galeria.appendChild(imagen);
    }
}

function mostrarImagen(id){

     const imagen = document.createElement('picture');
        imagen.innerHTML = `
            <img loading="lazy" src="build/img/grande/${id}.webp" alt="imagen de galeria">
    `;

    //crea el overlay con la imagen
    const overlay = document.createElement("div");
    overlay.appendChild(imagen);
    overlay.classList.add("overlay");
    overlay.onclick = function(){
        const body = document.querySelector("body");
        body.classList.remove("fijar-body")
        overlay.remove();
    }

    // Boton para cerrar el modal
    const cerrarModal = document.createElement("p");
    cerrarModal.textContent = "X";
    cerrarModal.classList.add("btn-cerrar")
    cerrarModal.onclick = function(){
        const body = document.querySelector("body");
        body.classList.remove("fijar-body")
        overlay.remove();
    }

    overlay.appendChild(cerrarModal)



    //anadir al body
    const body = document.querySelector("body");
    body.appendChild(overlay);
    body.classList.add("fijar-body")
}

