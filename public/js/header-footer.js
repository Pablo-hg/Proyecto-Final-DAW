
//AL CARGAR LA WEB
window.onload = function() {
    // EFECTO ANIMAR HAMBURGUESA
    $('.bt-menu').on('click', function () {
        $('.animated-icon2').toggleClass('open');
    });
    irArriba();
    transicion();
};

//EFECTO QUE ANIMA LOS ELEMENTOS DEL MENU
function menu(){
    const element = document.querySelector("nav");
    const elemento2 = document.querySelector(".nav");
    const elemento3 = document.querySelector(".contacto");
    const elemento4 = document.querySelector(".logo-cabeza");
    var button = document.getElementById("menu");
    var valor = button.getAttribute("aria-expanded");
    var svg = document.getElementById('svgs');
    var pestañas = document.getElementById('pestañas');


    if(valor){
        element.style.setProperty("--before", "translateY(-10px)");
        elemento2.style.setProperty("--collapse", "translateY(55px)");
        elemento3.style.setProperty("--contacto", "translateX(-35px) translateY(-40px)");
        elemento4.style.setProperty("--logo", "translateX(70px) translateY(-40px)");

        svg.style.setProperty("--svg", "translateY(-170px)");
        pestañas.style.height = "185px";
    }
    if(valor.valueOf()=="false"){
        element.style.setProperty("--before", "translateY(-130px)");
        elemento3.style.setProperty("--contacto", "translateX(0px) translateY(0px)");
        elemento4.style.setProperty("--logo", "translateX(0px) translateY(0px)");

        svg.style.setProperty("--svg", "translateY(-265px)");
        pestañas.style.height = "115px";
    }
}

//EFECTO PARA SUBIR ARRIBA DE LA WEB
function irArriba(){
    //Subir arriba en 1s
    $('.ir-arriba').click(function(){
        $('body,html').animate({
            scrollTop:'0px'
        },{
            duration:0,
            easing: 'ease'
        });
    });

    //animacion que muestra y esconde el boton
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('.ir-arriba').slideDown(600);
        }else{
            $('.ir-arriba').slideUp(600);
        }
    });
}

//EFECTO PANTALLA DE CARGA ANTES DE CAMBIAR DE PESTAÑA
function transicion(){
    const enlaces = document.querySelectorAll('.cambio');
    for (let i = 0; i < enlaces.length; i++) {
        const enlace = enlaces[i];
        enlace.addEventListener('click', e => {
            e.preventDefault();
            //ANIMACION SVG ARRIBA
            var arriba = document.getElementById('arriba');
            arriba.animate([
                { height:"0%"},
                { height:"100%" }
            ],{
                duration: 375,
            });
            arriba.style.height = "100%";
            arriba.style.top = "0%";
            //ANIMACION SVG ABAJO
            var abajo = document.getElementById('abajo');
            abajo.animate([
                { height:"0%",top:"100%"},
                { height:"100%",top:"0%" }
            ],{
                duration: 375,
            });
            abajo.style.height = "100%";
            abajo.style.top = "0%";
            //RETARDO AL CAMBIAR DE PESTAÑA
            setInterval(() => {
                window.location.href = enlace.getAttribute("href");
            }, 500);
        })
    }
}

//Efecto que deja fijo el svg y el nav al deslizar
window.onscroll = function() {
    var svg = document.getElementById('svgs');
    var header = document.querySelector(".navPrincipal");
    svg.classList.toggle("fijar",window.scrollY>=270);
    header.classList.toggle("fijar",window.scrollY>=270);
};

//EFECTO HOVER DE LAS REDES
function hoverRedes(red){
    var svg = red;
    svg.style.fill = "#1D67A6";
}
function salirRedes(red){
    var svg = red;
    svg.style.fill = "white";
}











