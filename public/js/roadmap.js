
/*var dibujo = document.getElementById('dibujo');
var circulo2 = document.querySelector(".circulo2");
var circulo1 = document.querySelector(".circulo1");
var y = 0;
var y2 = 0;
var ejey = 0;
var objetivo = "";
$(window).scroll(function(){
    y2 = y;
    y = window.scrollY;
    if(y>1800){
        dibujo.classList.remove("on");
        dibujo.classList.add("off");
        circulo2.style.display = "block";
    }
    if(dibujo.classList.contains("pulsado") && y<1800) {
        dibujo.classList.remove("off");
        dibujo.classList.add("on");
        circulo2.style.display = "none";
    }
    if(!dibujo.classList.contains("pulsado")){
        circulo2.style.display = "none";
    }
    //console.log("y2:" + y2);
    console.log("y:" + y);

    if(y<200)objetivo = "derecha";
    else objetivo = "izquierda";

    console.log(objetivo);
        if(y>y2) ejey = ejey + 20;
        else ejey = ejey - 20;


    circulo1.style.left = ejey+"px";
});

function hola(){
    dibujo.classList.toggle("pulsado");
    dibujo.classList.toggle("on");
    dibujo.classList.toggle("off");
}*/
//animacion que muestra y esconde el boton

let path = document.querySelector('path');
let longitud = path.getTotalLength();

path.style.strokeDasharray = longitud + ' ' + longitud;

window.addEventListener('scroll',()=>{
    var porcentaje = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
    var lineaaltura = longitud * porcentaje;
    path.style.strokeDasharray = longitud - lineaaltura;

})


