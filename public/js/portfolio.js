// EFECTO OPACIDAD FILTROS PORTFOLIO
function hoverfiltro(x) {
    if (document.documentElement.scrollWidth > 580) {
        x.childNodes[3].style.opacity = 0;
        x.childNodes[1].style.opacity = 1;
    }
}
function salirhoversalir(x){
    x.childNodes[3].style.opacity = 1;
    x.childNodes[1].style.opacity = 0;
}

// EFECTO OPACIDAD FILTROS PORTFOLIO


//EFECTO FILTRADOR
window.onload = function() {
    // AGREGANDO CLASE ACTIVE AL PRIMER ENLACE //
    $('.filtros .filtro[category="all"]').addClass('ct_item-active');

    // FILTRANDO PRODUCTOS
    $('.filtro').click(function(){
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
            document.getElementById("showing").innerHTML = "Showing " + num.toString().bold() + " projects filtered by " + catProduct.bold().toUpperCase() + ".";
        } setTimeout(showProduct,400);
    });

    // MOSTRANDO TODOS LOS PRODUCTOS =======================
    $('.filtro[category="all"]').click(function(){
        function showAll(){
            $('.proyecto').show();
            $('.proyecto').css('transform', 'scale(1)');
            let all = "all projects";
            document.getElementById("showing").innerHTML = "Showing " + all.bold() + ". Use the filter to list them by skill or technology."
        } setTimeout(showAll,400);

    });
};
//EFECTO FILTRADOR
