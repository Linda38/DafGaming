let slide_left = document.querySelectorAll(".slide_left");

function mostrarScroll () {
    let scrollTop = document.documentElement.scrollTop;
    for (var i = 0; i < slide_left.length; i ++ ) {
        let alturaAnimado = slide_left[i].offsetTop;
        if(alturaAnimado - 100 < scrollTop){
            slide_left[i].style.opacity= 1;
            slide_left[i].classList.add("slide-left");
        }
    }
}

window.addEventListener('scroll', mostrarScroll);


let slide_right = document.querySelectorAll(".slide_right");

function mostrarScrollOne () {
    let scrollTop = document.documentElement.scrollTop;
    for (var i = 0; i < slide_right.length; i ++ ) {
        let alturaAnimadoOne = slide_right[i].offsetTop;
        if(alturaAnimadoOne - 100 < scrollTop){
            slide_right[i].style.opacity= 1;
            slide_right[i].classList.add("slide-right");
        }
    }
}

window.addEventListener('scroll', mostrarScrollOne);