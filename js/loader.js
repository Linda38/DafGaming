window.onload = function(){
    var contenedor = document.getElementById('contenedor_carga');
    contenedor.style.visibility = 'hidden';
    setTimeout(function(){
        contenedor.style.display = 'none';
    }, 1000);
}