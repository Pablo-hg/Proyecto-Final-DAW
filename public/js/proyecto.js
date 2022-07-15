
var anterior = document.getElementById("anterior");
var siguiente = document.getElementById("siguiente");

function verAnterior(enlace){
    var direccion = enlace.getAttribute("href");
    var hola = direccion.split("/");
    anterior.innerHTML = hola.pop();
    anterior.animate([
        { opacity:'0',left:'-80px'},
        { opacity:'1',left:'-10px'}
    ],{
        duration:500,
        easing:"ease-in-out",
    });
    anterior.style.opacity = "1";
    anterior.style.left = "-10px";

    var svg = enlace.childNodes[1];
    svg.animate([
        { transform: "rotateX(180deg)"},
        { transform: "rotateX(360deg)" }
    ],{
        duration: 500,
    });
    svg.style.transform ="rotateX(360deg)";

}
function verSiguiente(enlace){
    var direccion = enlace.getAttribute("href");
    var hola = direccion.split("/");
    siguiente.innerHTML = hola.pop();

    siguiente.animate([
        { opacity:'0',left:'80px'},
        { opacity:'1',left:'15px'}
    ],{
        duration:500,
        easing:"ease-in-out",
    });
    siguiente.style.opacity = "1";
    siguiente.style.left = "15px";

    var svg = enlace.childNodes[3];
    svg.animate([
        { transform: "rotateX(180deg)"},
        { transform: "rotateX(360deg)" }
    ],{
        duration: 500,
    });
    svg.style.transform ="rotateX(360deg)";


}
function cancelarHoverizq(enlace,hijo){
    var svg = enlace.childNodes[hijo];
    svg.animate([
        { transform: "rotateX(360deg)"},
        { transform: "rotateX(180deg)" }
    ],{
        duration: 500,
    });
    svg.style.transform ="rotateX(180deg)";

    anterior.animate([
        { opacity:'1',left:'-10px'},
        { opacity:'0',left:'-80px'}
    ],{
        duration:500,
    });
    anterior.style.opacity = "0";
}
function cancelarHoverdere(enlace,hijo){
    var svg = enlace.childNodes[hijo];
    svg.animate([
        { transform: "rotateX(360deg)"},
        { transform: "rotateX(180deg)" }
    ],{
        duration: 500,
    });
    svg.style.transform ="rotateX(180deg)";

    siguiente.animate([
        { opacity:'1',left:'10px'},
        { opacity:'0',left:'80px'}
    ],{
        duration:500,
        easing:"ease-in-out",
    });
    siguiente.style.opacity = "0";
    siguiente.style.left = "80px";

}



