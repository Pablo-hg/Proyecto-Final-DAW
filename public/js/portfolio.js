// EFECTO OPACIDAD FILTROS PORTFOLIO
function hoverfiltro(x) {
    if (document.documentElement.scrollWidth > 580) {
        x.childNodes[1].style.display = "block";
        x.childNodes[3].style.display = "none";
    }
}
function salirhoversalir(x){
    x.childNodes[1].style.display = "none";
    x.childNodes[3].style.display = "block";
}

// EFECTO OPACIDAD FILTROS PORTFOLIO


//EFECTO FILTRADOR
$(document).ready(function(){
    // AGREGANDO CLASE ACTIVE AL PRIMER ENLACE //
    $('.filtros .filtro[category="all"]').addClass('ct_item-active');

    // FILTRANDO PRODUCTOS
    $('.filtro').click(function(){
        console.log("hola");
        var catProduct = $(this).attr('category');

        // AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
        $('.filtro').removeClass('ct_item-active');
        $(this).addClass('ct_item-active');

        // OCULTANDO PRODUCTOS =========================
        $('.proyecto').css('transform', 'scale(0)');
        function hideProduct(){
            $('.proyecto').hide();
        } setTimeout(hideProduct,400);

        // MOSTRANDO PRODUCTOS =========================
        function showProduct(){
            let proyecto = document.querySelectorAll('.proyecto');
            let num = 0;
            for(let k of proyecto){
                if(k.getAttribute("category").includes(catProduct)){
                    k.setAttribute('style','transform=0;scale=1');
                    num++;
                }
            }
            if(catProduct=="C")catProduct="C#";
            document.getElementById("showing").innerHTML = "Mostrando " + num.toString().bold() + " projectos filtrados por " + catProduct.bold().toUpperCase() + ".";
        } setTimeout(showProduct,400);
    });

    // MOSTRANDO TODOS LOS PRODUCTOS =======================
    $('.filtro[category="all"]').click(function(){
        function showAll(){
            $('.proyecto').show();
            $('.proyecto').css('transform', 'scale(1)');
            let all = "todos los proyectos";
            document.getElementById("showing").innerHTML = "Mostrando " + all.bold() + ". Usa el filtro para enumerarlos por habilidad o tecnología."
        } setTimeout(showAll,400);
    });
    cargarHover();
});
//EFECTO FILTRADOR


//Efecto que carga las imagnes "hover" de los proyectos
function cargarHover(){
    var numeros = document.getElementById("numeros").innerHTML;
    for(let k = 1; k <= numeros;k++){
        var direccion =  document.getElementById("url"+k).innerHTML.substring(0,document.getElementById("url"+k).innerHTML.length);
        document.getElementById("contentBx"+k).style.setProperty('--hover','url("'+direccion);
    }
}



