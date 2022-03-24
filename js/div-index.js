function mostrar(ventana) {
    div = document.getElementById(ventana);
    div.style.display = '';
}

function cerrar(ventana) {
    div = document.getElementById(ventana);
    div.style.display = 'none';
}

//movimiendo gif home
function moveGifHome(){
    document.getElementById("image_conf").src ="img/Confetti.gif";
            setTimeout(function(){
            document.getElementById("image_conf").src="img/Confetti2.gif";
          },1550,"JavaScript");
}